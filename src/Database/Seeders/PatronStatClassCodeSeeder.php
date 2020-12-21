<?php

namespace Database\Seeders;

use Blashbrook\PAPIForms\App\Models\PatronStatClassCode;
use Illuminate\Database\Seeder;

class PatronStatClassCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatronStatClassCode::create([
            'StatisticalClassID' => 1,
            'OrganizationID'     => 3,
            'Description'        => 'Adult City Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 2,
            'OrganizationID'     => 3,
            'Description'        => 'Adult County Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 3,
            'OrganizationID'     => 3,
            'Description'        => 'Adult Courtesy',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 4,
            'OrganizationID'     => 3,
            'Description'        => 'Adult Non-Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 5,
            'OrganizationID'     => 3,
            'Description'        => 'Business Use Only',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 6,
            'OrganizationID'     => 3,
            'Description'        => 'Homebound',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 7,
            'OrganizationID'     => 3,
            'Description'        => 'Interlibrary Loan',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 8,
            'OrganizationID'     => 3,
            'Description'        => 'Juvenile City Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 9,
            'OrganizationID'     => 3,
            'Description'        => 'Juvenile County Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 10,
            'OrganizationID'     => 3,
            'Description'        => 'Juvenile Courtesy',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 11,
            'OrganizationID'     => 3,
            'Description'        => 'Juvenile Non-Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 12,
            'OrganizationID'     => 3,
            'Description'        => 'Teen City Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 13,
            'OrganizationID'     => 3,
            'Description'        => 'Teen County Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 14,
            'OrganizationID'     => 3,
            'Description'        => 'Teen Courtesy',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 15,
            'OrganizationID'     => 3,
            'Description'        => 'Teen Non-Resident',
        ]);
        PatronStatClassCode::create([
            'StatisticalClassID' => 16,
            'OrganizationID'     => 3,
            'Description'        => 'Teen Limited',
        ]);
    }
}
