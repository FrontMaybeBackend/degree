@extends('layouts.header')

@section('header')
    @parent
@endsection

@section('content')
    @include('layouts.status')
    <body class="bg-black">
    @include('layouts.status')
    <div>
        @foreach($workout as $workouts)
            <p> {{$workouts->name}}</p>
        @endforeach
    </div>
@endsection
