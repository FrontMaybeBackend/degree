<?php

namespace App\Http\Services;

use App\Models\Exercise;

class ApiService
{

    public function fetchAllExercises()
    {
        $type = [
            'abdominals',
            'abductors',
            'adductors',
            'biceps',
            'calves',
            'chest',
            'forearms',
            'glutes',
            'hamstrings',
            'lats',
            'lower_back',
            'middle_back',
            'neck',
            'quadriceps',
            'traps',
            'triceps'
        ];
        foreach ($type as $types) {
            $response = ExercisesService::fetchExercises($types);


            if ($response->successful()) {
                $exercises = $response->json();

                foreach ($exercises as $exercise) {

                    $result = [
                        'name' => $exercise['name'],
                        'type' => $exercise['type'],
                        'muscle' => $exercise['muscle'],
                        'equipment' => $exercise['equipment'],
                        'difficulty' => $exercise['difficulty'],
                        'instructions' => $exercise['instructions'],
                    ];
                    Exercise::query()->updateOrCreate($result);
                }
            }
        }
    }

}
