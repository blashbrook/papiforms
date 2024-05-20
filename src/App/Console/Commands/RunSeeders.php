<?php

namespace Blashbrook\PAPIForms\App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class RunSeeders extends Command
{
    protected $signature = 'papiforms:seed';

    protected $description = 'Populate database with defaults from json files';

    protected $seeders = [
        'Blashbrook\\PAPIForms\\database\\seeders\\UdfOptionSeeder',
        'Blashbrook\\PAPIForms\\database\\seeders\\UdfOptionDefSeeder',
        'Blashbrook\\PAPIForms\\database\\seeders\\PostalCodeSeeder',
        'Blashbrook\\PAPIForms\\database\\seeders\\PatronCodeSeeder',
        'Blashbrook\\PAPIForms\\database\\seeders\\MobilePhoneCarrierSeeder',
        'Blashbrook\\PAPIForms\\database\\seeders\\PatronStatClassCodeSeeder',
        'Blashbrook\\PAPIForms\\database\\seeders\\DeliveryOptionSeeder',
    ];

    public function handle(): void
    {
        foreach ($this->seeders as $seeder) {
            Artisan::call('db:seed', ['class' => $seeder],$this->getOutput());

        }
    }
}
