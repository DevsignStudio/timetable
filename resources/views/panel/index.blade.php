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
                            <th data-field="id">Name</th>
                            <th data-field="name">Item Name</th>
                            <th data-field="price">Item Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Alvin</td>
                            <td>Eclair</td>
                            <td>$0.87</td>
                        </tr>
                        <tr>
                            <td>Alan</td>
                            <td>Jellybean</td>
                            <td>$3.76</td>
                        </tr>
                        <tr>
                            <td>Jonathan</td>
                            <td>Lollipop</td>
                            <td>$7.00</td>
                        </tr>
                        <tr>
                            <td>Shannon</td>
                            <td>KitKat</td>
                            <td>$9.99</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
