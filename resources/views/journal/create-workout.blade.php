@extends('layouts.header')

@section('header')
    @parent
@endsection

@section('content')
    @include('layouts.status')
    <body class="bg-black">
    @vite(['resources/css/create-workout.css', 'resources/js/app.js'])
    @include('layouts.status')
    <menu>
        <button class="btn btn-light muscle-btn" data-muscle="abdominals">Odwodziciele</button>
        <button class="btn btn-light muscle-btn" data-muscle="abductors">Przywodziciele</button>
        <button class="btn btn-light muscle-btn" data-muscle="adductors">Przywodziciele</button>
        <button class="btn btn-light muscle-btn" data-muscle="biceps">Biceps</button>
        <button class="btn btn-light muscle-btn" data-muscle="calves">Łydki</button>
        <button class="btn btn-light muscle-btn" data-muscle="chest">Klatka Piersiowa</button>
        <button class="btn btn-light muscle-btn" data-muscle="forearms">Przedramiona</button>
        <button class="btn btn-light muscle-btn" data-muscle="glutes">Pośladki</button>
        <button class="btn btn-light muscle-btn" data-muscle="hamstrings">Dwójki</button>
        <button class="btn btn-light muscle-btn" data-muscle="lats">Najszersze</button>
        <button class="btn btn-light muscle-btn" data-muscle="lower_back">Czworoboczny</button>
        <button class="btn btn-light muscle-btn" data-muscle="middle_back">Środek pleców</button>
        <button class="btn btn-light muscle-btn" data-muscle="neck">Szyja</button>
        <button class="btn btn-light muscle-btn" data-muscle="quadriceps">Nogi</button>
        <button class="btn btn-light muscle-btn" data-muscle="traps">Kaptury</button>
        <button class="btn btn-light muscle-btn" data-muscle="triceps">Triceps</button>
    </menu>


    <div id="exercise-list" class="exercises w-50 h-100">

    </div>
@endsection
