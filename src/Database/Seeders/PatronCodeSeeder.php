<?php

namespace Blashbrook\PAPIForms\Database\Seeders;

use Blashbrook\PAPIForms\App\Models\PatronCode;
use Illuminate\Database\Seeder;

class PatronCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatronCode::create([
            'PatronCodeID' => 1,
            'Description'  => 'Adult Courtesy',
        ]);
        PatronCode::create([
            'PatronCodeID' => 2,
            'Description'  => 'Adult Paid',
        ]);
        PatronCode::create([
            'PatronCodeID' => 3,
            'Description'  => 'Adult',
        ]);
        PatronCode::create([
            'PatronCodeID' => 4,
            'Description'  => 'Bulk Loan Institutions',
        ]);
        PatronCode::create([
            'PatronCodeID' => 5,
            'Description'  => 'Business Use Only',
        ]);
        PatronCode::create([
            'PatronCodeID' => 7,
            'Description'  => 'Homebound',
        ]);
        PatronCode::create([
            'PatronCodeID' => 8,
            'Description'  => 'ILL',
        ]);
        PatronCode::create([
            'PatronCodeID' => 9,
            'Description'  => 'Juvenile Courtesy',
        ]);
        PatronCode::create([
            'PatronCodeID' => 11,
            'Description'  => 'Juvenile Paid',
        ]);
        PatronCode::create([
            'PatronCodeID' => 13,
            'Description'  => 'Juvenile',
        ]);
        PatronCode::create([
            'PatronCodeID' => 15,
            'Description'  => 'Library Board',
        ]);
        PatronCode::create([
            'PatronCodeID' => 16,
            'Description'  => 'Outreach Institutions',
        ]);
        PatronCode::create([
            'PatronCodeID' => 17,
            'Description'  => 'Staff',
        ]);
        PatronCode::create([
            'PatronCodeID' => 18,
            'Description'  => 'Teen Courtesy',
        ]);
        PatronCode::create([
            'PatronCodeID' => 22,
            'Description'  => 'Temp Internet User',
        ]);
        PatronCode::create([
            'PatronCodeID' => 23,
            'Description'  => 'Teen Paid',
        ]);
        PatronCode::create([
            'PatronCodeID' => 27,
            'Description'  => 'Teen',
        ]);
        PatronCode::create([
            'PatronCodeID' => 31,
            'Description'  => 'eCard',
        ]);
        PatronCode::create([
            'PatronCodeID' => 35,
            'Description'  => 'Teen Pass',
        ]);
        PatronCode::create([
            'PatronCodeID' => 37,
            'Description'  => 'Juvenile Expanded Movie',
        ]);
    }
}
