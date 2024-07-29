<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;

class ExercisesService
{

    public static function fetchExercises($type)
    {
        try{
            return Http::withHeaders(['X-Api-Key' => env('API_KEY')])->get('https://api.api-ninjas.com/v1/exercises?muscle=' . $type);
        }catch( \Exception $e) {
          echo 'Bad call to api' , $e->getMessage();
        }
    }

}
