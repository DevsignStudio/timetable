<?php

namespace App;

use App\Subject;
use App\Period;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = 'timetables';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'year', 'semester'];

    public function subjects() {
        $subjects = Subject::where("timetable_id", $this->id)->get();

        return $subjects;
    }

    public function periods() {
        $subjects = $this->subjects();
        $periods = [];

        foreach ($subjects as $subject) {
            $ps = Period::where("subject_id", $subject->id)->get();

            foreach ($ps as $p) {
                $periods[] = $p;
            }
        }
        return $periods;

    }

    public function day($day) {
        $subjects = $this->subjects();
        $periods = [];

        foreach ($subjects as $subject) {
            $ps = Period::where("subject_id", $subject->id)->where("day", $day)->get();

            foreach ($ps as $p) {
                $periods[] = $p;
            }
        }
        return $periods;
    }

    public function period($data) {
        $subjects = $this->subjects();
        $periods = [];

        foreach ($subjects as $subject) {
            $ps = Period::where("subject_id", $subject->id)->where("period", $data)->get();

            foreach ($ps as $p) {
                $periods[] = $p;
            }
        }
        return $periods;
    }
}
