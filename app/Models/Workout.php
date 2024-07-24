<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Workout extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = false;


    protected $fillable = [
        'name',
        'exercise',
        'sets',
        'reps',
        'pause',
        'break',
        'rpe',
        'tempo',
        'day',
        'user_id',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function getWorkoutForAuthUser($user) {
        $workouts = Workout::query()->with('user')->where('user_id','=',$user)->get();
        return $workouts;
    }



}
