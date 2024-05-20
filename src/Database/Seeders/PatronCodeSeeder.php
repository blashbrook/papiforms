<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\PatronCode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PatronCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PatronCode::truncate();
        
        $json = File::get(__DIR__ . "/patron_codes.json");
        $patron_codes = json_decode($json);
        
        foreach ($patron_codes as $value) {
            PatronCode::query()->updateOrCreate([
                "PatronCodeID" => $value->PatronCodeID,
                "Description" => $value->Description
            ]);
        }
    }
}
