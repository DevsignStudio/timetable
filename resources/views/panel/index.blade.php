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
                        <p>This website is designed to help you to manage your time, classes, and subjects throughout all the semesters.</p>
                        <p>Its really easy to use!</p>
                        <p>Lets get started!</p>

                    </div>
                    <div class="card-action">
                        <a href="panel/timetable-add" class="white-text">Add new Timetable</a>
                    </div>
                </div>
                <h4 class="red-text">My Timetable</h4>
                <table class="hoverable responsive-table">
                    <thead>
                        <tr>
                            <th data-field="id">Id</th>
                            <th data-field="name">Year</th>
                            <th data-field="name">Semester</th>
                            <th data-field="price">Number Of Subject(s)</th>
                            <th data-field="price">View Timetable</th>
                            <th data-field="price">Add Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tts as $tt)
                        <tr>
                            <td>{{$tt->id}}</td>
                            <td>{{$tt->year}}</td>
                            <td>Semester {{$tt->semester}}</td>
                            <td>{{$tt->subjects()->count()}} subject(s)</td>
                            <td>
                                <a href="/panel/timetable-view/{{$tt->id}}" class="waves-effect waves-light btn">View</a>
                            </td>
                            <td>
                                <a href="/panel/timetable-subject-add/{{$tt->id}}" class="waves-effect waves-light btn">Add Subject</a>
                            </td>
                        </tr>
                        @endforeach

                        @if ($count == 0)
                        <tr>
                            <td colspan="100" style="text-align:center">No Timetable create</td>
                        </tr>
                        @endif


                    </tbody>
                </table>

                <a href="panel/timetable-add" style="margin-top: 20px;" class="waves-effect waves-light btn">Add New Timetable</a>
            </div>
        </div>
    </div>
</div>

@endsection
