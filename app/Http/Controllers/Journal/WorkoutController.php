<?php

namespace App\Http\Controllers\Journal;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use App\Models\Muscle;
use App\Models\Workout;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Workout $workout)
    {
        $user = auth()->user()->getAuthIdentifier();
        return view('journal.index-workout', [
            'workout' => $workout->getWorkoutForAuthUser($user),
            'user' => $user,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = auth()->user();
        return view('journal.create-workout',
            [
                'user' => $user,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $workout = new Workout($request->all());
        $workout->save();

    }

    public function getExercisesForMuscle($muscle): JsonResponse
    {
        $exercises = new Exercise();
        $muscles = $exercises->getExerciseForMuscle($muscle);
        return response()->json($muscles);
    }


    /**
     * Display the specified resource.
     */
    public function show(Workout $workout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workout $workout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Workout $workout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workout $workout)
    {
        //
    }
}
