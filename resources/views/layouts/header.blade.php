<html>
<head>

    <title>App Name - @yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
@section('header')
    <header class="d-flex justify-content-between">
        <h1 class="text-white small p-4">Structural </h1>
        <h1 class="text-white small p-4">Balance</h1>
        <ul class="d-flex align-items-center text-white flex-row list-unstyled">
            @guest
                <li class="p-4 ">
                    <a class="alert-link small" href="{{ route('login') }}">Login</a>
                </li>
                <li class="p-4">
                    <a class="alert-link small" href="{{ route('register') }}"> Register</a>
                </li>
            @endguest
            @auth
                    <li class="p-4">
                        <a class="alert-link small text-white" href="{{route('profile', $user->id)}}"> Profil</a>
                    </li>
                    <li class="p-4">
                        <form method="POST" action="{{ route('logout')}}">
                            @csrf
                        <button type="submit" class="alert-link small btn btn-sm">Wyloguj</button>
                        </form>
                    </li>
            @endauth
        </ul>
    </header>
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
