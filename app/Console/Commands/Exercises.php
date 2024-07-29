<?php

namespace App\Console\Commands;

use http\Client\Request;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

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
    protected $description = 'Get exercsises from ninjas api';

    /**
     * Execute the console command.
     */
    public function handle(Request $request)
    {
        $request = Http::get('')
    }
}
