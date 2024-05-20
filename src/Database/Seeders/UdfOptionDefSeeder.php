<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\UdfOptionDef;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UdfOptionDefSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UdfOptionDef::truncate();
        
        $json = File::get(__DIR__ . "/udf_option_defs.json");
        $udf_option_def = json_decode($json);
        
        foreach ($udf_option_def as $value) {
            UdfOptionDef::query()->updateOrCreate([
                "OrgID" => $value->OrgID,
                "UDFOptionID" => $value->UDFOptionID,
                "AttrID" => $value->AttrID,
                "DisplayOrder" => $value->DisplayOrder
            ]);
        }
    }
}
