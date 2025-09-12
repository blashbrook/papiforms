<?php

namespace Blashbrook\PAPIForms\App\Concerns;

    trait APIHelpers
    {
        protected function fetchData($uri, $key)
        {
            $response = $this->papiclient->method('get')->uri($uri)->execRequest();

            if (! isset($response[$key]) || ! is_array($response[$key])) {
                throw new \Exception('Invalid API response: '.$key.' missing or not an array.');
            }

            return $response[$key];
        }
    }
