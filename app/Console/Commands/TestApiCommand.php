<?php

namespace App\Console\Commands;

use App\Services\CaronasService;
use Illuminate\Console\Command;

class TestApiCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'api:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $res = CaronasService::getCaronas();
        $this->info(json_encode($res));
    }
}
