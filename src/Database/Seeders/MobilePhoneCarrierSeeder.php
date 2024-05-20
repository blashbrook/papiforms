<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class MobilePhoneCarrierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MobilePhoneCarrier::truncate();
        
        $json = File::get(__DIR__ . "/mobile_phone_carriers.json");
        $mobile_phone_carriers = json_decode($json);
        
        foreach ($mobile_phone_carriers as $value) {
            MobilePhoneCarrier::query()->updateOrCreate([
                "CarrierID" => $value->CarrierID,
                "CarrierName" => $value->CarrierName,
                "Email2SMSEmailAddress" => $value->Email2SMSEmailAddress,
                "NumberOfDigits" => $value->NumberOfDigits,
                "Display" => $value->Display
            ]);
        }
    }
}
