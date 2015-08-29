@extends('master')

@section('title', 'Home')

@section("content")

<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <h4 class="red-text">My Timetable</h4>
                <style>

                    .subject {
                        background-color: #B2DFDB;
                    }

                </style>
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
                    <table class="hoverable responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">Day/Period</th>
                            <th data-field="id" style="text-align:center">Sunday</th>
                            <th data-field="id" style="text-align:center">Monday</th>
                            <th data-field="id" style="text-align:center">Tuesday</th>
                            <th data-field="id" style="text-align:center">Wednesday</th>
                            <th data-field="id" style="text-align:center">Thursday</th>
                            <th data-field="id" style="text-align:center">Friday</th>
                            <th data-field="id" style="text-align:center">Saturday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-field="day">08:00-09:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_2 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">09:00-10:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_3 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">10:00-11:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_4 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">11:00-12:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_5 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">12:00-13:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_6 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">13:00-14:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_7 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">14:00-15:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_8 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">15:00-16:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_9 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">16:00-17:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_10 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">17:00-18:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_11 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                        <tr>
                            <td data-field="day">18:00-19:00</td>
                            @for($i = 1; $i <= 7; $i++)
                                <?php $has = false; ?>
                                @foreach ($tt_12 as $x)
                                    @if ($x->day == $i)
                                        <td class="subject" style="text-align:center">{{App\Subject::find($x->subject_id)->subjectcode}}</td>
                                        <?php $has = true; ?>
                                    @endif
                                @endforeach

                                @if (!$has)
                                    <td> </td>
                                @endif

                            @endfor
                        <tr>
                    </tbody>
                </table>
                <hr>
                <a href="/panel/timetable-subject-add/{{$tt->id}}" style="margin-top: 40px;margin-bottom: 24px;" class="waves-effect waves-light btn">Add Subject</a>
                <table class="hoverable responsive-table" >
                    <thead>
                        <tr>
                            <th data-field="name">Subject Code</th>
                            <th data-field="name">Subject Name</th>
                            <th data-field="price">Lecturer Name</th>
                            <th data-field="price">Credit</th>
                            <th data-field="price">Edit Subject</th>
                            <th data-field="price">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subs as $sub)
                        <tr>
                            <td>{{$sub->subjectcode}}</td>
                            <td>{{$sub->subjectname}}</td>
                            <td>{{$sub->lectname}}</td>
                            <td>{{$sub->credit}}</td>
                            <td><a href="/panel/timetable-subject-edit/{{$sub->id}}" class="waves-effect waves-light btn">Edit</a> </td>
                            <td><a href="/panel/subject-delete/{{$sub->id}}" class="waves-effect waves-light btn">Delete</a> </td>

                        </tr>
                        @endforeach

                        @if ($count == 0)
                        <tr>
                            <td colspan="100" style="text-align:center">No Timetable create</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
