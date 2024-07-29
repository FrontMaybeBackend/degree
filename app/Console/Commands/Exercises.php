<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;


class Exercises extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:exercises';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get exercises from ninjas api';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('fetch-exercises');
    }
}
