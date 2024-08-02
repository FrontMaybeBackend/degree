<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Exercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'muscle_id',
        'equipment',
        'difficulty',
        'instructions',
    ];


    public function muscle(): BelongsTo {
        return $this->belongsTo(Muscle::class);
    }

    public function getExerciseForMuscle($muscle): Collection {
        //Get all exercises for target muscle
        $exercises = Exercise::query()->whereHas('muscle',  function($query) use ($muscle) {
            $query->where('muscle', $muscle);
        })->get();
        return $exercises;
    }
}
