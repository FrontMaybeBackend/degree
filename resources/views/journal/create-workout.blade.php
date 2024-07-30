@extends('layouts.header')

@section('header')
    @parent
@endsection

@section('content')
    @include('layouts.status')
    <body class="bg-black">
    @include('layouts.status')
    <div class="container d-flex vh-50 min-vh-100  w-50 justify-content-center align-items-center ">
        <form class="p-4 bg-white" method="POST"
              action="{{route('workout.store')}}">
            @csrf
            <div class="mb-3">
                <label for="name">Nazwa planu</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <div id="inputFields">
                    <label for="exercise">Ćwiczenia</label>
                    <input type="text" class="form-control" id="exercise" name="exercise">
                </div>
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
                <input type="text" class="form-control" id="pause" name="pause">
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
                <input type="text" maxlength="4" class="form-control" id="tempo" name="tempo">
            </div>
            <div class="mb-3">
                <label for="day">Dni</label>
                <input type="text" class="form-control" id="day" name="day">
            </div>
            <input type="hidden" value="{{ $user->id }}" id="user_id" name="user_id">
            <button type="submit" class="btn btn-primary">Dodaj plan</button>
        </form>
    </div>

    <label for="name">Nazwa planu</label>
    <input type="text" class="form-control" id="name" name="name">

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ćwiczenia</th>
            <th scope="col">Powtórzenia</th>
            <th scope="col">Pauza</th>
            <th scope="col">Przerwa</th>
            <th scope="col">RPE</th>
            <th scope="col">Tempo</th>
            <th scope="col">Dni</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th scope="row">1</th>
            <td>
                <select id="exercise">Ćwiczenia
                    @foreach($exercises as $exercise)
                        <option value="{{$exercise->name}}"> {{ $exercise->name }}</option>
                    @endforeach
                </select>
            </td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>

@endsection
