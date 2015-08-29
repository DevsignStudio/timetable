<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <title>TimeTabler - @yield('title')</title>
    </head>
    <body>
        <header>
            @section('navigation')

                <nav class="red darken-2" role="navigation">
                    <div class="nav-wrapper container">

                        @if(Auth::guest())

                            <a id="logo-container" href="/" class="brand-logo"><img class="responsive-img" src="/img/timetabler3.jpg" alt="TimeTabler"></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="/login">Sign In</a></li>
                            </ul>

                            <ul id="nav-mobile" class="side-nav">
                                <li><a href="/login">Sign In</a></li>
                            </ul>
                        @else
                            <a id="logo-container" href="/panel" class="brand-logo"><img class="responsive-img" src="/img/timetabler.png" alt="TimeTabler"></a>
                            <ul class="right hide-on-med-and-down">
                                <li><a href="/logout">Sign Out</a></li>
                            </ul>

                            <ul id="nav-mobile" class="side-nav">
                                <li><a href="/logout">Sign Out</a></li>
                            </ul>
                        @endif
                        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
                    </div>
                </nav>
            @show
        </header>

        <main>
            @yield('content')
        </main>


        @section('footer')
        <footer class="page-footer red darken-2">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">The TimeTablerz Co.uk</h5>
                        <p class="grey-text text-lighten-4">Just a simple method of handling your schedule in UTM, we made this because if it was available in our time, it could save us A LOT of time. :)</p>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Customer support</h5>
                        <ul>
                            <?php $rom ='' ;
                            $rom =1 + str_random(1)%5;
                            ?>
                            @if($rom =='1')
                            <li><a class="white-text" href="#!">please contact support@timetablerz.co.uk for any enquiry</a></li>
                            @elseif($rom =='2')
                            <li><a class="white-text" href="#!">The server room is on fire. Can't show the data.</a></li>
                            @elseif($rom =='3')
                            <li><a class="white-text" href="#!">How to make a website : 1. learn how to use laravel. 2. Cry alone in the corner</a></li>
                            @elseif($rom =='4')
                            <li><a class="white-text" href="#!">we have an army of Llama</a></li>
                            @else
                            <li><a class="white-text" href="#!">how we make this website : with fairy dust and unicorn horn</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col l3 s12">
                        <h5 class="white-text">Connect</h5>
                        <ul>
                            <li><a class="white-text" href="#!">Each sold separately battery not included</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    Made by Hoomannns</a>
                </div>
            </div>
        </footer>
        @show

        @section("js")
            <!--  Scripts-->
            <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
            <script src="/js/materialize.js"></script>
            <script src="/js/init.js"></script>
        @show
    </body>
</html>
