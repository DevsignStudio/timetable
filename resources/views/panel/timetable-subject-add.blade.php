@extends('master')

@section('title', 'Dashboard Panel')

@section("content")
<br><br>
<div class="container">
    <div class="row ">
        <form class="col s8 offset-s2" action="/panel/timetable-subject-add" method="post">
            @if (session()->has("err"))
            <div class="card-panel pink">
                <span class="white-text">{{session("err")}}</span>
            </div>
            @endif

            @if (session()->has("scs"))
            <div class="card-panel green">
                <span class="white-text">{{session("scs")}}</span>
            </div>
            @endif
            <div class="row">
                <h5 style="text-align:left" class="red-text">Subject General Information</h5>
                <div class="input-field col s8">
                    <input id"subject" type="text" name="name" class="validate" required>
                    <label for="subject">Subject Name</label>
                </div>
                <div class="input-field col s4">
                    <input id"subject" type="text" name="code" class="validate" required>
                    <label for="subject">Subject Code</label>
                </div>
                <div class="input-field col s8">
                    <input id"subject" type="text" name="lect_name" class="validate" required>
                    <label for="subject">Lecturer name</label>
                </div>
                <div class="input-field col s4">
                    <input id"subject" type="text" name="credit" class="validate" required>
                    <label for="subject">Credit Hours</label>
                </div>
                <h5 style="text-align:left" class="red-text">Subject Period Time Information</h5>

                <div class="input-field col s6">
                    <select name="day1">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Day</option>
                        <option value="{{$encrypt[1]}}">Sunday</option>
                        <option value="{{$encrypt[2]}}">Monday</option>
                        <option value="{{$encrypt[3]}}">Tuesday</option>
                        <option value="{{$encrypt[4]}}">Wednesday</option>
                        <option value="{{$encrypt[5]}}">Thursday</option>
                        <option value="{{$encrypt[6]}}">Friday</option>
                        <option value="{{$encrypt[7]}}">Saturday</option>
                    </select>
                    <label>First Hour Day</label>
                </div>
                <div class="input-field col s6">
                    <select name="period1">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Period </option>
                        <option value="{{$encrypt[2]}}">Period 2</option>
                        <option value="{{$encrypt[3]}}">Period 3</option>
                        <option value="{{$encrypt[4]}}">Period 4</option>
                        <option value="{{$encrypt[5]}}">Period 5</option>
                        <option value="{{$encrypt[6]}}">Period 6</option>
                        <option value="{{$encrypt[7]}}">Period 7</option>
                        <option value="{{$encrypt[8]}}">Period 8</option>
                        <option value="{{$encrypt[9]}}">Period 9</option>
                        <option value="{{$encrypt[10]}}">Period 10</option>
                        <option value="{{$encrypt[11]}}">Period 11</option>
                        <option value="{{$encrypt[12]}}">Period 12</option>
                    </select>
                    <label>First Period Time</label>
                </div>
            </div>

            <div class="row" id="info-2" style="display:none">
                <div class="input-field col s6">
                    <select name="day2">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Day</option>
                        <option value="{{$encrypt[1]}}">Sunday</option>
                        <option value="{{$encrypt[2]}}">Monday</option>
                        <option value="{{$encrypt[3]}}">Tuesday</option>
                        <option value="{{$encrypt[4]}}">Wednesday</option>
                        <option value="{{$encrypt[5]}}">Thursday</option>
                        <option value="{{$encrypt[6]}}">Friday</option>
                        <option value="{{$encrypt[7]}}">Saturday</option>
                    </select>
                    <label>Second Hour Day</label>
                </div>
                <div class="input-field col s6">
                    <select name="period2">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Period </option>
                        <option value="{{$encrypt[2]}}">Period 2</option>
                        <option value="{{$encrypt[3]}}">Period 3</option>
                        <option value="{{$encrypt[4]}}">Period 4</option>
                        <option value="{{$encrypt[5]}}">Period 5</option>
                        <option value="{{$encrypt[6]}}">Period 6</option>
                        <option value="{{$encrypt[7]}}">Period 7</option>
                        <option value="{{$encrypt[8]}}">Period 8</option>
                        <option value="{{$encrypt[9]}}">Period 9</option>
                        <option value="{{$encrypt[10]}}">Period 10</option>
                        <option value="{{$encrypt[11]}}">Period 11</option>
                        <option value="{{$encrypt[12]}}">Period 12</option>
                    </select>
                    <label>Second Period Time</label>
                </div>
            </div>

            <div class="row" id="info-3" style="display:none">
                <div class="input-field col s6">
                    <select name="day3">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Day</option>
                        <option value="{{$encrypt[1]}}">Sunday</option>
                        <option value="{{$encrypt[2]}}">Monday</option>
                        <option value="{{$encrypt[3]}}">Tuesday</option>
                        <option value="{{$encrypt[4]}}">Wednesday</option>
                        <option value="{{$encrypt[5]}}">Thursday</option>
                        <option value="{{$encrypt[6]}}">Friday</option>
                        <option value="{{$encrypt[7]}}">Saturday</option>
                    </select>
                    <label>Third Hour Day</label>
                </div>
                <div class="input-field col s6">
                    <select name="period3">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Period </option>
                        <option value="{{$encrypt[2]}}">Period 2</option>
                        <option value="{{$encrypt[3]}}">Period 3</option>
                        <option value="{{$encrypt[4]}}">Period 4</option>
                        <option value="{{$encrypt[5]}}">Period 5</option>
                        <option value="{{$encrypt[6]}}">Period 6</option>
                        <option value="{{$encrypt[7]}}">Period 7</option>
                        <option value="{{$encrypt[8]}}">Period 8</option>
                        <option value="{{$encrypt[9]}}">Period 9</option>
                        <option value="{{$encrypt[10]}}">Period 10</option>
                        <option value="{{$encrypt[11]}}">Period 11</option>
                        <option value="{{$encrypt[12]}}">Period 12</option>
                    </select>
                    <label>Third Period Time</label>
                </div>
            </div>

            <div class="row" id="info-4" style="display:none">
                <div class="input-field col s6">
                    <select name="day4">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Day</option>
                        <option value="{{$encrypt[1]}}">Sunday</option>
                        <option value="{{$encrypt[2]}}">Monday</option>
                        <option value="{{$encrypt[3]}}">Tuesday</option>
                        <option value="{{$encrypt[4]}}">Wednesday</option>
                        <option value="{{$encrypt[5]}}">Thursday</option>
                        <option value="{{$encrypt[6]}}">Friday</option>
                        <option value="{{$encrypt[7]}}">Saturday</option>
                    </select>
                    <label>Fourth Hour Day</label>
                </div>
                <div class="input-field col s6">
                    <select name="period4">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Period </option>
                        <option value="{{$encrypt[2]}}">Period 2</option>
                        <option value="{{$encrypt[3]}}">Period 3</option>
                        <option value="{{$encrypt[4]}}">Period 4</option>
                        <option value="{{$encrypt[5]}}">Period 5</option>
                        <option value="{{$encrypt[6]}}">Period 6</option>
                        <option value="{{$encrypt[7]}}">Period 7</option>
                        <option value="{{$encrypt[8]}}">Period 8</option>
                        <option value="{{$encrypt[9]}}">Period 9</option>
                        <option value="{{$encrypt[10]}}">Period 10</option>
                        <option value="{{$encrypt[11]}}">Period 11</option>
                        <option value="{{$encrypt[12]}}">Period 12</option>
                    </select>
                    <label>Fourth Period Time</label>
                </div>
            </div>

            <div class="row" id="info-5" style="display:none">
                <div class="input-field col s6">
                    <select name="day5">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Day</option>
                        <option value="{{$encrypt[1]}}">Sunday</option>
                        <option value="{{$encrypt[2]}}">Monday</option>
                        <option value="{{$encrypt[3]}}">Tuesday</option>
                        <option value="{{$encrypt[4]}}">Wednesday</option>
                        <option value="{{$encrypt[5]}}">Thursday</option>
                        <option value="{{$encrypt[6]}}">Friday</option>
                        <option value="{{$encrypt[7]}}">Saturday</option>
                    </select>
                    <label>Fifth Hour Day</label>
                </div>
                <div class="input-field col s6">
                    <select name="period5">
                        <option value="{{$encrypt[0]}}" disabled selected>Select Period </option>
                        <option value="{{$encrypt[2]}}">Period 2</option>
                        <option value="{{$encrypt[3]}}">Period 3</option>
                        <option value="{{$encrypt[4]}}">Period 4</option>
                        <option value="{{$encrypt[5]}}">Period 5</option>
                        <option value="{{$encrypt[6]}}">Period 6</option>
                        <option value="{{$encrypt[7]}}">Period 7</option>
                        <option value="{{$encrypt[8]}}">Period 8</option>
                        <option value="{{$encrypt[9]}}">Period 9</option>
                        <option value="{{$encrypt[10]}}">Period 10</option>
                        <option value="{{$encrypt[11]}}">Period 11</option>
                        <option value="{{$encrypt[12]}}">Period 12</option>
                    </select>
                    <label>Fifth Period Time</label>
                </div>
            </div>
            <div class="input-field col s6">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </div>
            <div class="input-field col s6">
            <input type="hidden" name="timetable_id" value="{{ $tt_id }}">
            </div>
            <div>
            <button type="submit"  class="btn waves-effect waves- red darken-2">Add Subject</button>
            <button type="button" id="add-period" class="btn waves-effect waves- red darken-2">Add Period</button>
            <div>
        </form>
    </div>
    <br><br>
</div>

@endsection

@section('js')
    @parent
    <script charset="utf-8">
    $(document).ready(function() {
        $('select').material_select();

        var count = 1;

        $("#add-period").click(function() {
            count += 1;
            $("#info-"+ count).show();

            if (count === 5) {
                $(this).hide();
            }
        })
    });

    </script>
@endsection
