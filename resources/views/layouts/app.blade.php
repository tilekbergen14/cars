<!DOCTYPE html>
<html>

<head>
    @yield("insidehead")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="overflow-x: hidden">
    <div class="icon-bar">
        <a class="active" href="/"><i class="fa fa-home"></i></a>
        <a href="{{ route('cars') }}"><i class="fa fa-search"></i></a>
        @auth
            <a href="{{ route('dashboard') }}"><i class="fa fa-user" aria-hidden="true"></i></a>
        @endauth
        @guest
            <a href="#" style="text-decoration: none">HI</a>
        @endguest
        @auth
            <a>{{ auth()->user()->name }}</a>
        @endauth
        @auth
            <a href="{{ route('logout') }}"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
        @endauth
        @guest
            <a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i></a>
        @endguest
        @guest
            <a href="{{ route('register') }}"><i class="fa fa-address-card-o" aria-hidden="true"></i></a>
        @endguest
    </div>
    @yield("content")
</body>

</html>
