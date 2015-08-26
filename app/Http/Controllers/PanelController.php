<?php

namespace App\Http\Controllers;

use App\User;
use App\Timetable;
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

        return redirect()->back()->with("scs", "Succesfully add new timetable");
    }
}
