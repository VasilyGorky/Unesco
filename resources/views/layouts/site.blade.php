<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unesco</title>

    <!-- Scripts -->
    <script type="text/javascript" src="{{asset('js')}}/app.js" ></script>
    <script type="text/javascript" src="{{asset('comments/js')}}/comment-reply.js" ></script>
    <script type="text/javascript" src="{{asset('comments/js')}}/comment-scripts.js" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <!-- Styles -->
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('css')}}/app.css" />
    <link rel="stylesheet" type="text/css" media="all" href="{{asset('comments/css')}}/comments.css" />

    <link rel="shortcut icon" href="{{ asset('img\favicon.png') }}" type="image/png">
</head>
<body>
<div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="z-index: 2;top: 0;left: 0;right: 0;">
                <button class="w3-button  " onclick="w3_open()" style="color: black">☰</button>
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img\Unesco-Logo.jpg') }}" style="width: 100px">
                    <img src="{{ asset('img\unesco.gif') }}">
                </a>
                <div class="container" >

                    <a class="navbar-brand" href="{{ url('/') }}">
                        Главная
                    </a>
                    <a class="navbar-brand" href="{{ url('page/12') }}">
                        Студенту
                    </a>
                    <a class="navbar-brand" href="{{ url('page/13') }}">
                        Абитуриенту
                    </a>
                    <a class="navbar-brand" href="{{ url('page/17') }}">
                        Контакты
                    </a>

                    <a class="navbar-brand" style="margin-left: 150px" href="{{ url('forum/1') }}">
                        Форум
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                <li><a class="nav-link" href="{{ route('login') }}">{{ __('Авторизация') }}</a></li>
                                <li><a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a></li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->firstname }} {{ Auth::user()->secondname }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{  url('profile/'.Auth::user()->id) }}">
                                            Профиль
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Выход
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




    <main class="py-4" >
        @yield('sidebar')
        @yield('content')
        @yield('comments')

    </main>
    @yield('footer')
</div>
</body>
</html>
