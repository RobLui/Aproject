<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Project Antwerpen') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                  <ul class="nav navbar-nav">
                    <!-- Left Side Of Navbar -->
                        <li><a href="{{ url('/') }}"><img src="http://i.imgur.com/4nhGtlf.png" alt="logo_antwerpen"></a></li>
                        <li><a href="{{ url('/home') }}">HOME</a></li>
                        <li><a href="{{ url('/ontdek') }}">ONTDEK</a></li>
                        <li><a href="{{ url('/info') }}">INFO</a></li>
                        <li><a href="{{ url('/nieuws') }}">NIEUWS</a></li>
                        <li><a href="{{ url('/contact') }}">CONTACT</a></li>

                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Aanmelden</a></li>
                            <li><a href="{{ url('/register') }}">Registreren</a></li>
                        @else

                        <!-- @if(auth::user())
                        <li><a href="{{ url('article/add') }}">Add event</a></li>
                        @endif -->
                        <!-- <li><a href="{{ url('/#') }}">Brain Food</a></li>
                        <li><a href="{{ url('/#') }}">Places to Study</a></li>
                        <li><a href="{{ url('/#') }}">Things to see</a></li>
                        <li><a href="{{ url('/#') }}">Richtingen</a></li> -->


                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
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
      <div class="row">
        <footer>
          <div class="copyright">
            @include('includes.footer')
          </div>
        </footer>
      </div>
    </div>

      @yield('content')

      <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
