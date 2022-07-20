<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avalanche</title>
    <link rel="stylesheet" href="{{asset('Asstes/styles.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style=" background-color: #13101b;">
@yield('content')
<footer>
    <div class="user-details-conatiner">
        @if (Route::has('login'))
            @auth
                <div class="user-items">
                    {{--            <h2>For user <a href="./login.html">Login</a> </h2>--}}
                </div>
                <div class="user-items">
                    <h2><a href="{{ url('/home') }}">Home</a> </h2>
                </div>
                <div class="user-items">
                    {{--            <h2>For user <a href="./register.html">Registration</a> </h2>--}}
                </div>
            @else
                <div class="user-items">
                    <h2>For user <a href="{{ route('login') }}">Login</a> </h2>
                </div>
                <div class="user-items">
                    {{--                    <h2><a href="{{ url('/home') }}">Home</a> </h2>--}}
                </div>
                <div class="user-items">
                    <h2>For user <a href="{{ route('register') }}">Registration</a> </h2>
                </div>
            @endauth
        @endif
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>
