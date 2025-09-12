<?php

namespace Blashbrook\PAPIForms\App\Services;

    use Blashbrook\PAPIClient\PAPIClient;
    use Blashbrook\PAPIForms\App\Concerns\PAPIHelpers;
    use Blashbrook\PAPIForms\App\Models\PatronCode;

    class PatronCodeFetcher
    {
        use PAPIHelpers;

        protected PAPIClient $papiclient;

        public function __construct(PAPIClient $papiclient)
        {
            $this->papiclient = $papiclient;
        }

        public function fetch(): int
        {
            $patronCodes = $this->fetchData('patroncodes', 'PatronCodesRows');
            $patronCodeIds = [];

            foreach ($patronCodes as $patronCode) {
                PatronCode::updateOrCreate(
                    ['PatronCodeID' => $patronCode['PatronCodeID']],
                    ['Description' => $patronCode['Description']]
                );
                $patronCodeIds[] = $patronCode['PatronCodeID'];
            }

            // Delete local records not in the API
            PatronCode::whereNotIn('PatronCodeID', $patronCodeIds)->delete();

            return count($patronCodeIds);
        }
    }
