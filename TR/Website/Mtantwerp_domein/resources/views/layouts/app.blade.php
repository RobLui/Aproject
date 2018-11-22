<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>--}}

<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sc.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

    <style type="text/css">
        @font-face {
            font-family: "Antwerpen";
            src: url('{{ url('font/AntwerpenRegular.otf') }}');
        }
    </style>

    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta name="description" content="Antwerpen"/>
    <meta name="keywords" content="Antwerpen, Studenten, A'pen, Studie, Richtingen "/>
    <meta name="author" content="Robbert & Thessa"/>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <h3 class="hamburgerTitel"> Studeren in Antwerpen</h3>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <ul class="menu">
                    <!-- Left Side Of Navbar -->
                    <li class="logoImg"><a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" alt="Logo Antwerpen"/></a></li>
                    <!-- HOME -->
                    <li class='{{ Request::is('home') ? 'active' : "" }}'><a href="{{ route('index')  }}">Home</a></li>
                    <!-- ONTDEK -->
                    <li class='{{ Request::is('ontdek') ? 'active' : "" }}'><a href="{{ route('discover') }}">Ontdek</a></li>
                    <!-- INFO -->
                    <li class='{{ Request::is('info') ? 'active' : "" }}'><a href="{{ route('info') }}">Info</a></li>
                    <!-- NIEUWS -->
                    <li class='{{ Request::is('nieuws') ? 'active' : "" }}'><a href="{{ route('news') }}">Nieuws</a></li>

                    @if (Auth::guest())
                        <li class='aanmeldenNav'><i class="fa fa-user"></i><a href="{{ route('login') }} ">Aanmelden</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    @if( Auth::user()->name == "Admin" || Auth::user()->email == "robbertluit@hotmail.com")
                                        <a href="{{ route('admin_panel') }}">
                                            Admin panel
                                        </a>
                                    @endif
                                    <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Uitloggen
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

@yield('content')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script>
        {{--{{ $app['request'] }}--}}
    var slideIndex = 0;
    slider_function();

    function slider_function() {
        var i;
        var x = document.getElementsByClassName("slide_img");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {
            slideIndex = 1;
        }
        x[slideIndex - 1].style.display = "block";
        setTimeout(slider_function, 5000);
    }
</script>

</body>
@include('includes.footer')
</html>
