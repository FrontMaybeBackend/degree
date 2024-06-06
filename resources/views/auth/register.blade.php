<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-black">
@include('layouts.status')
<div class="container d-flex vh-50 min-vh-100  w-50 justify-content-center align-items-center ">
    <form class="p-4 bg-white" method="POST"
          action="{{route('register.store')}}">
        @csrf
        <div class="mb-3">
            <label for="name">Username</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp"
                   placeholder="Username">
        </div>
        <div class="mb-3">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                   placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href= {{ route('login') }}>Login</a>
    </form>
</div>

</body>
</html>


