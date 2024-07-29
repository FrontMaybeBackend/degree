<?php

namespace App\Console\Commands;

use App\Http\Services\ApiService;
use Illuminate\Console\Command;

class FetchExercises extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch-exercises';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $getExercises;

    public function __construct(ApiService $getExercises)
    {
        parent::__construct();
        $this->getExercises = $getExercises;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        try{
            $this->getExercises->fetchAllExercises();
            $this->info('Exercises fetched successfull');
        }catch(\Exception $e){
            $this->error($e->getMessage());
        }

    }
}
