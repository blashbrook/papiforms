<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\DeliveryOption;
use Illuminate\Database\Seeder;

class DeliveryOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DeliveryOption::create([
            'DeliveryOptionID' => 1,
            'DeliveryOption' => 'Mailing Address',
        ]);
        DeliveryOption::create([
            'DeliveryOptionID' => 2,
            'DeliveryOption' => 'Email Address',
        ]);
        DeliveryOption::create([
            'DeliveryOptionID' => 3,
            'DeliveryOption' => 'Phone 1',
        ]);
        DeliveryOption::create([
            'DeliveryOptionID' => 4,
            'DeliveryOption' => 'Phone 2',
        ]);
        DeliveryOption::create([
            'DeliveryOptionID' => 5,
            'DeliveryOption' => 'Phone 3',
        ]);
        DeliveryOption::create([
            'DeliveryOptionID' => 6,
            'DeliveryOption' => 'FAX',
        ]);
        DeliveryOption::create([
            'DeliveryOptionID' => 7,
            'DeliveryOption' => 'EDI',
        ]);
        DeliveryOption::create([
            'DeliveryOptionID' => 8,
            'DeliveryOption' => 'TXT Messaging',
        ]);
    }
}
