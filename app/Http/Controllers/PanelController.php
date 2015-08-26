<?php

namespace App\Http\Controllers;

use App\User;
use App\Timetable;
use App\Subject;
use App\Period;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use Crypt;

class PanelController extends Controller{
    public function getIndex() {
        $data['tts'] = Timetable::where("user_id", Auth::user()->id)->get();
        $data['count'] = Timetable::where("user_id", Auth::user()->id)->count();
        return view("panel.index", $data);
    }

    public function getTimetableAdd() {
        $data['years'][] = (date("Y") - 1) . "/" . (date("Y"));
        $data['years'][] = date("Y") . "/" . (date("Y") + 1);

        return view("panel.timetable-add", $data);
    }

    public function postTimetableAdd(Request $request) {
        $tt = Timetable::where("user_id", Auth::user()->id)->where("year", Crypt::decrypt($request->year))->where("semester", Crypt::decrypt($request->semester))->first();

        if (!is_null($tt)) {
            return redirect()->back()->with("err", "You already have timetable for this semester");
        }

        $tt = new Timetable();
        $tt->user_id = Auth::user()->id;
        $tt->year = Crypt::decrypt($request->year);
        $tt->semester = Crypt::decrypt($request->semester);

        $tt->save();

        return redirect("panel/timetable-subject-add/". $tt->id)->with("scs", "Succesfully add new timetable");
    }

    public function getTimetableSubjectAdd($id = 0) {
        if ($id == 0) {
            return redirect()->back()->with("err", "An error has occur when try to reach page");
        }

        $tt = Timetable::find($id);
        $data["encrypt"][0] = Crypt::encrypt(0);
        $data["encrypt"][1] = Crypt::encrypt(1);
        $data["encrypt"][2] = Crypt::encrypt(2);
        $data["encrypt"][3] = Crypt::encrypt(3);
        $data["encrypt"][4] = Crypt::encrypt(4);
        $data["encrypt"][5] = Crypt::encrypt(5);
        $data["encrypt"][6] = Crypt::encrypt(6);
        $data["encrypt"][7] = Crypt::encrypt(7);
        $data["encrypt"][8] = Crypt::encrypt(8);
        $data["encrypt"][9] = Crypt::encrypt(9);
        $data["encrypt"][10] = Crypt::encrypt(10);
        $data["encrypt"][11] = Crypt::encrypt(11);
        $data["encrypt"][12] = Crypt::encrypt(12);

        $data['tt_id'] = Crypt::encrypt($tt->id);

        return view("panel.timetable-subject-add", $data);
    }

    public function postTimetableSubjectAdd(Request $request) {
        $info[1][0] = "";
        $info[1][1] = "";
        $info[2][0] = "";
        $info[2][1] = "";
        $info[3][0] = "";
        $info[3][1] = "";
        $info[4][0] = "";
        $info[4][1] = "";
        $info[5][0] = "";
        $info[5][1] = "";

        if ($request->has("day1") && $request->has("period1")) {
            $info[1][0] = Crypt::decrypt($request->day1);
            $info[1][1] = Crypt::decrypt($request->period1);
        } else {
            return redirect()->back()->with("err", "Error when trying to add subject");
        }

        if ($request->has("day2") && $request->has("period2")) {
            $info[2][0] = Crypt::decrypt($request->day2);
            $info[2][1] = Crypt::decrypt($request->period2);
        } else {
            if ($request->has("day2") || $request->has("period2")) {
                return redirect()->back()->with("err", "Error when trying to add subject");
            }
        }

        if ($request->has("day3") && $request->has("period3")) {
            $info[3][0] = Crypt::decrypt($request->day3);
            $info[3][1] = Crypt::decrypt($request->period3);
        } else {
            if ($request->has("day3") || $request->has("period3")) {
                return redirect()->back()->with("err", "Error when trying to add subject");
            }
        }


        if ($request->has("day4") && $request->has("period4")) {
            $info[4][0] = Crypt::decrypt($request->day4);
            $info[4][1] = Crypt::decrypt($request->period4);
        } else {
            if ($request->has("day4") || $request->has("period4")) {
                return redirect()->back()->with("err", "Error when trying to add subject");
            }
        }

        if ($request->has("day5") && $request->has("period5")) {
            $info[5][0] = Crypt::decrypt($request->day5);
            $info[5][1] = Crypt::decrypt($request->period5);
        } else {
            if ($request->has("day5") || $request->has("period5")) {
                return redirect()->back()->with("err", "Error when trying to add subject");
            }
        }

        $tt_id = Crypt::decrypt($request->timetable_id);

        $checkIfSame = false;
        for ($i = 1; $i <= 5; $i++) {
            if ($info[$i][0] != "" && $info[$i][1] != "") {
                for ($j = 1; $j <= 5; $j++) {
                    if($i != $j) {
                        if ($info[$i][0] == $info[$j][0] && $info[$i][1] == $info[$j][1]) {
                            $checkIfSame = true;
                        }
                    }
                }
            }
        }

        if ($checkIfSame) {
            return redirect()->back()->with("err", "Error because you try to add same period in same day for this subject");
        }

        $checkIfSame = false;
        $allPeriods = Timetable::find($tt_id)->periods();

        for ($i = 1; $i <= 5; $i++) {
            if ($info[$i][0] != "" && $info[$i][1] != "") {
                foreach ($allPeriods as $period) {
                    if ($info[$i][0] == $period->day && $info[$i][1] == $period->period) {
                        $checkIfSame = true;
                    }
                }
            }
        }

        if ($checkIfSame) {
            return redirect()->back()->with("err", "Error because another subject already in one of your period that you want to assign");
        }

        $subject = new Subject();
        $subject->timetable_id = $tt_id;
        $subject->subjectname = $request->name;
        $subject->subjectcode = $request->code;
        $subject->lectname = $request->lect_name;
        $subject->credit = $request->credit;

        $subject->save();

        for ($i = 1; $i <= 5; $i++) {
            if ($info[$i][0] != "" && $info[$i][1] != "") {
                $period = new Period;
                $period->subject_id = $subject->id;
                $period->day = $info[$i][0];
                $period->period = $info[$i][1];

                $period->save();
            }
        }

        return redirect()->back()->with("scs", "Succesfully add new subject to Timetable");
    }

    public function getTimetableView($id = 0) {
        if ($id == 0) {
            return redirect()->back()->with("err", "An error has occur when try to reach page");
        }

        $tt = Timetable::find($id);

        $data['tt_2'] = $tt->period(2);
        $data['tt_3'] = $tt->period(3);
        $data['tt_4'] = $tt->period(4);
        $data['tt_5'] = $tt->period(5);
        $data['tt_6'] = $tt->period(6);
        $data['tt_7'] = $tt->period(7);
        $data['tt_8'] = $tt->period(8);
        $data['tt_9'] = $tt->period(9);
        $data['tt_10'] = $tt->period(10);
        $data['tt_11'] = $tt->period(11);
        $data['tt_12'] = $tt->period(12);

        // return $tt->period(2);
        return view("panel.timetable-view", $data);
    }
}
