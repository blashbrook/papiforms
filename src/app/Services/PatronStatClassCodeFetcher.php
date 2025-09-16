<?php

namespace Blashbrook\PAPIForms\App\Services;

use Blashbrook\PAPIClient\PAPIClient;
use Blashbrook\PAPIForms\App\Concerns\PAPIClientConcerns;
use Blashbrook\PAPIForms\App\Models\PatronStatClassCode;

class PatronStatClassCodeFetcher
{
    use PAPIClientConcerns;

    protected PAPIClient $papiclient;

    public function __construct(PAPIClient $papiclient)
    {
        $this->papiclient = $papiclient;
    }

    public function fetch(): int
    {
        $patronStatClassCodes = $this->fetchData('patronstatisticalclasses', 'PatronStatisticalClassesRows');
        $patronStatClassCodeIds = [];

        foreach ($patronStatClassCodes as $patronStatClassCode) {
            PatronStatClassCode::updateOrCreate([
                'StatisticalClassID' => $patronStatClassCode['StatisticalClassID'],
                'OrganizationID' => $patronStatClassCode['OrganizationID'],
                'Description' => $patronStatClassCode['Description'],
            ]);
            $patronStatClassCodeIds[] = $patronStatClassCode['StatisticalClassID'];
        }

        // Delete local records not in the API
        PatronStatClassCode::whereNotIn('StatisticalClassID', $patronStatClassCodeIds)->delete();

        return count($patronStatClassCodeIds);
    }
}
