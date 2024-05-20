<?php

namespace Blashbrook\PAPIForms\App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Blashbrook\PAPIForms\App\Models\PostalCode */
class PostalCodeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'PostalCodeID' => $this->PostalCodeID,
            'PostalCode' => $this->PostalCode,
            'City' => $this->City,
            'State' => $this->State,
            'CountryID' => $this->CountryID,
            'County' => $this->County, //
        ];
    }
}
