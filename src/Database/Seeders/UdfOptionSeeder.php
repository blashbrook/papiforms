<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\UdfOption;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UdfOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UdfOption::truncate();

        $json = File::get(__DIR__.'/udf_options.json');
        $udf_options = json_decode($json);

        foreach ($udf_options as $value) {
            UdfOption::query()->updateOrCreate([
                'UDFOptionID' => $value->UDFOptionID,
                'AttrID' => $value->AttrID,
                'OptionDesc' => $value->OptionDesc,
            ]);
        }
    }
}
