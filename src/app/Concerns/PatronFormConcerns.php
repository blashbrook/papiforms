<?php

namespace Blashbrook\PAPIForms\App\Concerns;

    trait PatronFormConcerns
    {
        public function deliveryOptionUpdated($data): void
        {
            $this->form->DeliveryOptionID = $data['id'];
            $this->deliveryOptionName = $data['name'];
        }
    }
