<?php

namespace Blashbrook\PAPIForms\App\Services;

    use Blashbrook\PAPIClient\PAPIClient;
    use Blashbrook\PAPIForms\App\Concerns\APIHelpers;
    use Blashbrook\PAPIForms\App\Models\PatronUdf;

    class PatronUdfFetcher
    {
        use APIHelpers;

        protected PAPIClient $papiclient;

        public function __construct(PAPIClient $papiclient)
        {
            $this->papiclient = $papiclient;
        }

        public function fetch(): int
        {
            $patronUdfs = $this->fetchData('patronudfs', 'PatronUdfConfigsRows');
            $patronUdfIds = [];

            foreach ($patronUdfs as $patronUdf) {
                PatronUdf::updateOrCreate([
                    'PatronUdfID' => $patronUdf['PatronUdfID'],
                    'Label' => $patronUdf['Label'],
                    'Display' => $patronUdf['Display'],
                    'Values' => $patronUdf['Values'],
                    'Required' => $patronUdf['Required'],
                    'DefaultValue' => $patronUdf['DefaultValue'],
                ]);
                $patronUdfIds[] = $patronUdf['PatronUdfID'];
            }

            // Delete local records not in the API
            PatronUdf::whereNotIn('PatronUdfID', $patronUdfIds)->delete();

            return count($patronUdfIds);
        }
    }
