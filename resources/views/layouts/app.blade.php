<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{URL::to('/')}}/ckeditor/ckeditor.js"></script>
    <!-- Scripts -->
    <script type="text/javascript" rel="script" src="{{asset('js/app.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
            <span class="navbar-toggler-icon leftmenutrigger"></span>
                <a class="navbar-brand" href="{{ url('/index') }}"> PET PLACE
                </a>
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTOR') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                     {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('로그아웃') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('myPage') }}">
                                        마이페이지
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('recvMail') }}">나의쪽지함</a>
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

<footer class="container-fluid footer-dark bg-dark text-center foot" style="margin-top:13vh">

<div class="copyrights">
    <p class="white-txt">Your Site Name © 2017
        <br><br>
        <span class="navbar-toggler-icon leftmenutrigger"></span>
                <a class="navbar-brand" href="{{ url('/') }}"> PET PLACE
    <a href="mailto:cnghwls7@gmail.com">문의하기    </a>

    </p>

    <a class="link" href="#">Contact Us</a>&nbsp
    <a class="link" href="#">Privacy Policy</a>&nbsp
    <a class="link" href="#">Terms & Conditions</a>
    <br><br>
    <p class="white-txt small">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare elit odio, eu imperdiet ligula ullamcorper sed.
    </p>
</div>
</footer>
</body>
</html>
