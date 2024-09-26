@extends('layouts.header')

@section('header')
    @parent
@endsection

@section('content')
    @include('layouts.status')
    <body class="bg-black">
    @vite(['resources/css/create-workout.css', 'resources/js/app.js'])
    @include('layouts.status')

    <label for="exercises">Ćwiczenia</label>
    <select name="exercises" id="exercises">
        <option selected>Wybierz Partie</option>
        <option class="btn btn-light muscle-btn" value="abdominals">Odwodziciele </option>
        <option class="btn btn-light muscle-btn" value="adductors">Przywodziciele</option>
        <option class="btn btn-light muscle-btn" value="biceps">Biceps</option>
        <option class="btn btn-light muscle-btn" value="calves">Łydki</option>
        <option class="btn btn-light muscle-btn" value="chest">Klatka Piersiowa</option>
        <option class="btn btn-light muscle-btn" value="forearms">Przedramiona</option>
        <option class="btn btn-light muscle-btn" value="glutes">Pośladki</option>
        <option class="btn btn-light muscle-btn" value="hamstrings">Dwójki</option>
        <option class="btn btn-light muscle-btn" value="lats">Najszersze</option>
        <option class="btn btn-light muscle-btn" value="lower_back">Czworoboczny</option>
        <option class="btn btn-light muscle-btn" value="middle_back">Środek pleców</option>
        <option class="btn btn-light muscle-btn" value="neck">Szyja</option>
        <option class="btn btn-light muscle-btn" value="quadriceps">Nogi</option>
        <option class="btn btn-light muscle-btn" value="traps">Kaptury</option>
        <option class="btn btn-light muscle-btn" value="triceps">Triceps</option>
    </select>


    <table id="exercise-list" class="exercises w-50 h-100">

    </table>

    <form class= "w-50 h-100" action="{{route('workout.store')}}" method="post" name="makeTraining" id="makeTraining">
        @csrf
        <div class="mb-3">
            <label for="name">Nazwa planu</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="sets">Serie</label>
            <input type="number" max="15" min="1" class="form-control" id="sets" name="sets">
        </div>
        <div class="mb-3">
            <label for="reps">Powtórzenia</label>
            <input type="number" max="15" min="1" class="form-control" id="reps" name="reps">
        </div>
        <div class="mb-3">
            <label for="pause">Pauza</label>
            <input type="text"  class="form-control" id="pause" name="pause">
        </div>
        <div class="mb-3">
            <label for="break">Przerwa</label>
            <input type="text" class="form-control" id="break" name="break">
        </div>
        <div class="mb-3">
            <label for="rpe">RPE</label>
            <input type="number" class="form-control" id="rpe" name="rpe">
        </div>
        <div class="mb-3">
            <label for="tempo">Tempo</label>
            <input type="text"  maxlength="4"  class="form-control" id="tempo" name="tempo">
        </div>
        <div class="mb-3">
            <label for="day">Dni</label>
            <input type="text" class="form-control" id="day" name="day">
        </div>
        <input type="hidden" value="{{ $user->id }}" id="user_id" name="user_id">
        <button  hidden id="btnCreate" class="btn-info" type="submit">Stwórz</button>
    </form>

@endsection
