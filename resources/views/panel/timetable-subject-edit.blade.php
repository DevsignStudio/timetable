@extends('master')

@section('title', 'Dashboard Panel')

@section("content")
<br><br>
<div class="container">
    <div class="row ">
        <form class="col s8 offset-s2" action="/panel/timetable-subject-edit" method="post">
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
                    <input id"subject" type="text" name="name" class="validate" value="{{$subject->subjectname}}" required>
                    <label for="subject">Subject Name</label>
                </div>
                <div class="input-field col s4">
                    <input id"subject" type="text" name="code" class="validate" value="{{$subject->subjectcode}}"required>
                    <label for="subject">Subject Code</label>
                </div>
                <div class="input-field col s8">
                    <input id"subject" type="text" name="lect_name" class="validate" value="{{$subject->lectname}}" required>
                    <label for="subject">Lecturer name</label>
                </div>
                <div class="input-field col s4">
                    <input id"subject" type="text" name="credit" class="validate" value="{{$subject->credit}}" required>
                    <label for="subject">Credit Hours</label>
                </div>
                <h5 style="text-align:left" class="red-text">Subject Period Time Information</h5>
            </div>
                <?php $i = 1 ?>
                @foreach ($periods as $period)
                @if($i == 1) <?php $text =  "First"?>@endif
                @if($i == 2) <?php $text =  "Second"?>@endif
                @if($i == 3) <?php $text =  "Third"?>@endif
                @if($i == 4) <?php $text =  "Fourth"?>@endif
                @if($i == 5) <?php $text =  "Fifth"?>@endif
                <div class="row" id="info-{{$i}}">
                    <div class="input-field col s6" >
                        <select name="day{{$i}}">
                            <option value="0" disabled selected>Select Day</option>
                            <option value="1" @if($period->day == 1) selected @endif>Sunday</option>
                            <option value="2" @if($period->day == 2) selected @endif>Monday</option>
                            <option value="3" @if($period->day == 3) selected @endif>Tuesday</option>
                            <option value="4" @if($period->day == 4) selected @endif>Wednesday</option>
                            <option value="5" @if($period->day == 5) selected @endif>Thursday</option>
                            <option value="6" @if($period->day == 6) selected @endif>Friday</option>
                            <option value="7" @if($period->day == 7) selected @endif>Saturday</option>
                        </select>

                        <label>{{$text}} Hour Day</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="period{{$i}}">
                            <option value="0" disabled selected>Select Period </option>
                            <option value="2" @if($period->period == 2) selected @endif>Period 2</option>
                            <option value="3" @if($period->period == 3) selected @endif>Period 3</option>
                            <option value="4" @if($period->period == 4) selected @endif>Period 4</option>
                            <option value="5" @if($period->period == 5) selected @endif>Period 5</option>
                            <option value="6" @if($period->period == 6) selected @endif>Period 6</option>
                            <option value="7" @if($period->period == 7) selected @endif>Period 7</option>
                            <option value="8" @if($period->period == 8) selected @endif>Period 8</option>
                            <option value="9" @if($period->period == 9) selected @endif>Period 9</option>
                            <option value="10" @if($period->period == 10) selected @endif>Period 10</option>
                            <option value="11" @if($period->period == 11) selected @endif>Period 11</option>
                            <option value="12" @if($period->period == 12) selected @endif>Period 12</option>
                        </select>
                        <label>{{$text}} Period Time</label>
                    </div>
                </div>

                <?php $i +=1 ?>
                @endforeach

                @for (; $i < 6; $i++)
                @if($i == 1) <?php $text =  "First"?>@endif
                @if($i == 2) <?php $text =  "Second"?>@endif
                @if($i == 3) <?php $text =  "Third"?>@endif
                @if($i == 4) <?php $text =  "Fourth"?>@endif
                @if($i == 5) <?php $text =  "Fifth"?>@endif
                <div class="row"  style="display:none;" id="info-{{$i}}">
                    <div class="input-field col s6" >
                        <select name="day{{$i}}">
                            <option value="0" disabled selected>Select Day</option>
                            <option value="1">Sunday</option>
                            <option value="2">Monday</option>
                            <option value="3">Tuesday</option>
                            <option value="4">Wednesday</option>
                            <option value="5">Thursday</option>
                            <option value="6">Friday</option>
                            <option value="7">Saturday</option>
                        </select>

                        <label>{{$text}} Hour Day</label>
                    </div>
                    <div class="input-field col s6">
                        <select name="period{{$i}}">
                            <option value="0" disabled selected>Select Period </option>
                            <option value="2">Period 2</option>
                            <option value="3">Period 3</option>
                            <option value="4">Period 4</option>
                            <option value="5">Period 5</option>
                            <option value="6">Period 6</option>
                            <option value="7">Period 7</option>
                            <option value="8">Period 8</option>
                            <option value="9">Period 9</option>
                            <option value="10">Period 10</option>
                            <option value="11">Period 11</option>
                            <option value="12">Period 12</option>
                        </select>
                        <label>{{$text}} Period Time</label>
                    </div>
                </div>
                @endfor

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="subject_id" value="{{ Crypt::encrypt($subject->id )}}">

            <button type="submit"  class="btn waves-effect waves- red darken-2">Edit Subject</button>
            <button type="button" id="add-period" class="btn waves-effect waves- red darken-2">Add Period</button>
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

        var count = {{$count}};

        $("#add-period").click(function() {
            console.log(count);
            count += 1;
            $("#info-"+ count).show();

            if (count === 5) {
                $(this).hide();
            }
        })
    });

    </script>
@endsection
