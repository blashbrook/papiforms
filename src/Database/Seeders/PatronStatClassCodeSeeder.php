<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\PatronStatClassCode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PatronStatClassCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PatronStatClassCode::truncate();

        $json = File::get(__DIR__.'/patron_stat_class_codes.json');
        $patron_stat_class_codes = json_decode($json);

        foreach ($patron_stat_class_codes as $value) {
            PatronStatClassCode::query()->updateOrCreate([
                'StatisticalClassID' => $value->StatisticalClassID,
                'OrganizationID' => $value->OrganizationID,
                'Description' => $value->Description,
            ]);
        }
    }
}
