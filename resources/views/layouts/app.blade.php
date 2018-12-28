<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Guia da Aprovação</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- <script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}" defer></script> -->
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.js') }}" defer></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script type="text/javascript" src="{{ url('assets/js/bootstrap.bundle.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-grid.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-grid.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-reboot.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-reboot.min.css') }}" rel="stylesheet">
    <style type="text/css">
    .fundo{
        background-color: #c0c0c0;
    }
</style>
</head>
<body class="fundo">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Home
                </a>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Separated link</a>
                  </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Entrar</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Registrar-se</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</div>
</nav>

<main class="py-4">
    @yield('content')
</main>
</div>
<script src="https://googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
