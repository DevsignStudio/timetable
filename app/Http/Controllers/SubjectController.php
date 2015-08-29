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

class SubjectController extends Controller
{
    //
    public function delete($id) {

        $subject = Subject::findOrFail($id);
        $sid = $subject->id;
        $subject->delete();


        periods::where('subject_id', '=', $sid)->delete();

       return view("panel.subject-view")->with("scs", "Delete succesfully");
    }
}
