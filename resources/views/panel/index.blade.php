@extends('master')

@section('title', 'Home')

@section("content")
<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12">
                <div class="card blue darken-1" style="margin-bottom: 30px;">
                    <div class="card-content white-text">

                        <span class="card-title">Welcome to Timetabler, {{Auth::user()->name}}!</span>
                        <p>Just a simple method of handling your schedule in UTM, we made this because if it was available in our time, it could save us A LOT of time. :)</p>
                        <p>It's really easy to use!</p>
                        <p>Lets get started!</p>
                    </div>

                    <div class="card-action">
                        <a href="panel/timetable-add" class="white-text">Add new Timetable</a>
                    </div>

                </div>
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
                <h4 class="red-text">My Timetable</h4>
                <table class="hoverable responsive-table">
                    <thead>
                        <tr>
                            <!--<th data-field="id">Id</th> -->
                            <th data-field="name">Year</th>
                            <th data-field="name">Semester</th>
                            <th data-field="price">Number Of Subject(s)</th>
                            <th data-field="price">View Timetable</th>
                            <th data-field="price">Add Subject</th>
                            <th data-field="price">Delete</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tts as $tt)
                        <tr>
                            <!--<td>{{$tt->id}}</td> -->
                            <td>{{$tt->year}}</td>
                            <td>Semester {{$tt->semester}}</td>
                            <td>{{$tt->subjects()->count()}} subject(s)</td>
                            <td>
                                <a href="/panel/timetable-view/{{$tt->id}}" class="waves-effect waves-light btn">View</a>
                            </td>
                            <td>
                                <a href="/panel/timetable-subject-add/{{$tt->id}}" class="waves-effect waves-light btn">Add</a>
                            </td>
                            <td> <a href="/panel/timetable-delete/{{$tt->id}}" class="waves-effect waves-light btn">delete</a> </td>

                        </tr>
                        @endforeach

                        @if ($count == 0)
                        <tr>
                            <td colspan="100" style="text-align:center">No Timetable create</td>
                        </tr>
                        @endif


                    </tbody>
                </table>

                <a href="/panel/timetable-add" style="margin-top: 20px;" class="waves-effect waves-light btn">Add New Timetable</a>
            </div>
        </div>
    </div>
</div>

@endsection
