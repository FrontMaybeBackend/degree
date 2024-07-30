<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Exercise extends Model
{
    use HasFactory;

    protected array $muscle;
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

    public function getExerciseForMuscle(): Collection {

        $exercises = Exercise::query()->whereHas('muscle', function($query) {
            $query->where('muscle', 'biceps');
        })->get();
        return $exercises;
    }
}
