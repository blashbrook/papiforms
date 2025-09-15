<?php

namespace Blashbrook\PAPIForms\App\Concerns;

trait PatronFormConcerns
{
    public function deliveryOptionUpdated($data): void
    {
        $this->form->DeliveryOptionID = $data['id'];
        $this->deliveryOptionName = $data['name'];
    }

    public function postalCodeUpdated($data): void
    {
        $this->selectedPostalCodeID = $data['id'];
        $this->form->PostalCode = $data['PostalCode'];
        $this->form->City = $data['City'];
        $this->form->State = $data['State'];
        $this->form->County = $data['County'];
        $this->form->CountryID = $data['CountryID'];
    }
}
