<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
      <meta name="description" content="Antwerpen" />
      <meta name="keywords" content="Antwerpen, Studenten, A'pen, Studie, Richtingen " />
      <meta name="author" content="Robbert & Thessa" />

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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Branding Image -->
                  <ul class="menu">
                    <!-- Left Side Of Navbar -->
                        <li><a href="{{ url('/home') }}"><img src="http://i.imgur.com/4nhGtlf.png" alt="Logo"/></a></li>
                        <li><a href="{{ url('/home') }}">Home</a></li>
                        <li><a href="{{ url('/ontdek') }}">Ontdek</a></li>
                        <li><a href="{{ url('/info') }}">Info</a></li>
                        <li><a href="{{ url('/nieuws') }}">Nieuws</a></li>

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Aanmelden</a></li>
                            <li><a href="{{ url('/register') }}">Registreren</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li>
                                      <a href="{{ url('/admin-panel') }}">Admin-panel</a>
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
    <script src="/js/app.js"></script>
</body>
@include('includes.footer')
</html>
