@extends('master')

@section('title', 'Home')

@section("content")
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center s18 orange-text">An easy way to manage your classes here in UTM</h1>
        <div class="row center">
            <a href="/login"  class="btn-large waves-effect waves- red darken-2">Sign In</a>
        </div>
        <br><br>
    </div>
</div>

<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-amber-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Speeds up registration process</h5>

                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-amber-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">Easily check class availability</h5>

                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-amber-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Easy to use</h5>

                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="section">

    </div>
</div>

@endsection
