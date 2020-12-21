<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\PostalCode;
use Illuminate\Database\Seeder;

class PostalCodeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PostalCode::create([
            'PostalCodeID'=> 23389,
            'PostalCode'  => '42301',
            'City'        => 'ST JOSEPH',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23390,
            'PostalCode'  => '42302',
            'City'        => 'OWENSBORO',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23391,
            'PostalCode'  => '42303',
            'City'        => 'OWENSBORO',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23392,
            'PostalCode'  => '42304',
            'City'        => 'OWENSBORO',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23422,
            'PostalCode'  => '42355',
            'City'        => 'MACEO',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23423,
            'PostalCode'  => '42356',
            'City'        => 'MAPLE MOUNT',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23426,
            'PostalCode'  => '42366',
            'City'        => 'KNOTTSVILLE',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23427,
            'PostalCode'  => '42366',
            'City'        => 'PHILPOT',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23438,
            'PostalCode'  => '42376',
            'City'        => 'UTICA',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 23441,
            'PostalCode'  => '42378',
            'City'        => 'WHITESVILLE',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 56543,
            'PostalCode'  => '42351',
            'City'        => 'LEWISPORT',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 56616,
            'PostalCode'  => '42301',
            'City'        => 'OWENSBORO',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 56653,
            'PostalCode'  => '42336',
            'City'        => 'PHILPOT',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
        PostalCode::create([
            'PostalCodeID'=> 56663,
            'PostalCode'  => '42301',
            'City'        => 'STANLEY',
            'State'       => 'KY',
            'CountryID'   => 1,
            'County'      => 'DAVIESS',
        ]);
    }
}
