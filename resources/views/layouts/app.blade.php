{{--<!doctype html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    <title>{{ config('app.name', 'Laravel') }}</title>--}}

{{--    <!-- Scripts -->--}}
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

{{--    <!-- Fonts -->--}}
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

{{--    <!-- Styles -->--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--</head>--}}
{{--<body>--}}
{{--    <div id="app">--}}
{{--        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
{{--            <div class="container">--}}
{{--                <a class="navbar-brand" href="{{ url('/') }}">--}}
{{--                    {{ config('app.name', 'Laravel') }}--}}
{{--                </a>--}}
{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

{{--                <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--                    <!-- Left Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav me-auto">--}}

{{--                    </ul>--}}

{{--                    <!-- Right Side Of Navbar -->--}}
{{--                    <ul class="navbar-nav ms-auto">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main class="py-4">--}}
{{--            @yield('content')--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avalanche</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
   document.querySelectorAll('img').forEach(function(img){
  	img.onerror = function(){this.style.display='none';};
   })
})
    </script>

    <style type="text/css">
        option.red {background-color: #cc0000;}
        option.pink {background-color: #ff6680;}
        option.blue {background-color: #0000ff;}
        option.green {background-color: #008000;}
        option.yellow {background-color: #ffff00;}
        option.brown {background-color: #a52a2a;}
        option.cyan {background-color: #00ffff;}
        option.black {background-color: #000000;}
        option.white {background-color: #ffffff;}
        option.purple {background-color: #800080;}
        </style>

</head>

<body>
<style>
    body {
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: relative;
        display: block;
        background-color: #13101b;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .page-main-container {
        width: 100%;
        height: 100%;
    }

    .page-main-container .page-main-outter-container {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .page-main-container .page-main-outter-container .page-main-inner-container {
        width: 100%;
        max-width: 1230px;
        margin: auto;
    }

    .page-main-topic {
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        font-size: 30px;
        font-weight: 600;
        color: #fff;
        text-align: center;
        z-index: 11;
        position: relative;
    }

    .page-main-container .page-main-outter-container .page-main-inner-container .main-two-col-container {
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: flex-start;
        padding-top: 10%;
        z-index: 11;
        position: relative;
    }

    .page-main-container .page-main-outter-container .page-main-inner-container .main-two-col-container .col-item-container {
        width: 50%;
        text-align: center;
    }

    .page-main-container .page-main-outter-container .page-main-inner-container .main-two-col-container .col-item-container h2 {
        color: #fafafa;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .page-main-container .page-main-outter-container .page-main-inner-container .main-two-col-container .col-item-container p {
        color: #fafafa;
        font-size: 15px;
    }

    .page-main-container .page-main-outter-container .page-main-inner-container .main-two-col-container .col-item-container button {
        border: none;
        cursor: pointer;
        width: calc(100% - 75px);
        max-width: 230px;
        height: 50px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 6px;
        flex-direction: row;
        text-transform: uppercase;
        line-height: 1;
        letter-spacing: 0.03em;
        position: relative;
        font-family: "Motiva Sans", Sans-serif;
        display: flex;
        align-items: center;
        text-align: center;
        justify-content: center;
        margin: auto;
    }

    .win-btn {
        color: #fff;
        filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.16));
        background: linear-gradient(to right, #06bfff 50%, #2b74ff 100%);
        background-size: 200%;
        background-position: right 0;
        transition: background-position 300ms ease-in;
    }
    .win-btn:hover {
        background: linear-gradient(to right, #06bfff 20%, #2b74ff 80%);
    }

    .win-btn img {
        width: 100%;
        max-width: 20px;
        position: relative;
        margin-left: 10px;
    }

    .mac-btn {
        color: #fff;
        filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.16));
        background: linear-gradient(to right, #8c75b1 50%, #752abb 100%);
        background-size: 200%;
        background-position: right 0;
        transition: background-position 300ms ease-in;
    }
    .mac-btn:hover {
        background: linear-gradient(to right, #8c75b1 20%, #752abb 80%);
    }

    .mac-btn img {
        width: 100%;
        max-width: 18px;
        position: relative;
        margin-left: 10px;
        top: -2px;
    }
    .background-video-card {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 0;
    }
    .background-video-card img, video {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }
</style>

@yield('content')

</body>

</html>
