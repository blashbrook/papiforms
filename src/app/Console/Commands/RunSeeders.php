<?php

namespace Blashbrook\PAPIForms\App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunSeeders extends Command
{
    protected $signature = 'papi:seed';

    protected $description = 'Populate Database with defaults from json files';

    protected $seeders = [
        'Blashbrook\\PAPIForms\\Database\\Seeders\\PostalCodeSeeder',
        'Blashbrook\\PAPIForms\\Database\\Seeders\\DeliveryOptionSeeder',
    ];

    public function handle(): void
    {
        foreach ($this->seeders as $seeder) {
            Artisan::call('db:seed', ['class' => $seeder], $this->getOutput());
        }
    }
}
