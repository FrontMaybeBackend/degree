<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('exercise')->unique();
            $table->integer('sets');
           $table->integer('reps');
            $table->integer('pause');
           $table->char('break');
            $table->integer('rpe');
            $table->char('tempo');
            $table->string('day');
            $table->foreignUuid('user_id')->nullable()->index();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout');
    }
};
