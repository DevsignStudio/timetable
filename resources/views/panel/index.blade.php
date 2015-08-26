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
                        <p>I am a very simple card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively.</p>
                        <p>I am a very simple card. I am good at containing small bits of information.I am convenient because I require little markup to use effectively.</p>
                        <p>Amirin, Nanti edit dekat sini</p>

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
                            <th data-field="name">Year/Semester</th>
                            <th data-field="price">Number Of Subject(s)</th>
                            <th data-field="price">View Timetable</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                            <td>
                                <a class="waves-effect waves-light btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                            <td>
                                <a class="waves-effect waves-light btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                            <td>
                                <a class="waves-effect waves-light btn">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>KitKat</td>
                            <td>$9.99</td>
                            <td>
                                <a class="waves-effect waves-light btn">View</a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <a style="margin-top: 20px;" class="waves-effect waves-light btn">Add New Timetable</a>
            </div>
        </div>
    </div>
</div>

@endsection
