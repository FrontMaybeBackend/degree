@extends('layouts.header')

@section('header')
    @parent
@endsection

@section('content')
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/sass/profile.scss', 'resources/js/app.js'])
    @include('layouts.status')
    <body>
    <div id="div-profile" >
        <form id="profile-form" action="{{route('profile.update', $user)}}" method="POST"
              class="d-flex justify-content-center align-items-center flex-column">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Username</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">NewPassword</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                       value="{{ $user->email }}">

            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    </body>
@endsection
