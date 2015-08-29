@extends('master')

@section('title', 'Home')

@section("content")
<br><br>
<div class="container">
    <div class="row center">
        <form class="col s4 offset-s4" action="/login" method="post">
            @if (session()->has("err"))
            <div class="card-panel pink">
                <span class="white-text">{{session("err")}}</span>
            </div>

            @endif
            <br>
            <br><br>
            <br><br>
            <div class="row">
                <div class="input-field col s12">
                    <input id="matricNum" type = "text" name="username" class="validate">
                    <label for="matricNum">Matric Number</label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" name="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit"  class="btn-large waves-effect waves- red darken-2">Sign In</button>
        </form>
    </div>
    <br><br>
</div>

@endsection
