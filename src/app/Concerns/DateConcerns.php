<?php

    namespace Blashbrook\PAPIForms\App\Concerns;

    use Carbon\Carbon;

    trait DateConcerns
    {
        public static function displayableDate($date): string
        {
            return Carbon::createFromDate($date)->format('F d, Y');
        }

        public static function setDaysToExpiration($expirationDate): false|int
        {
            $now = Carbon::now();
            $gap = $now->diffInDays($expirationDate, false);
            return Number::parseInt($gap);
        }

        public static function setIsRenewable($patronCodeID, $expirationDate, $daysToExpiration){
            $renewableCodes = array('3', '15', '17', '41');

            //Testing
            // $this->daysToExpiration = $this->getDaysToExpiration('2025-09-01');

            if(in_array($patronCodeID,$renewableCodes) && $daysToExpiration < 31){
                return true;
            }
        }

        public static function formatToDateString($timestamp): string
        {
            return Carbon::createFromTimestampMs($timestamp)->toDateString();
        }
    }
