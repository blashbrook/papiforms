<?php

namespace Blashbrook\PAPIForms\App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Blashbrook\PAPIForms\App\Models\PatronStatClassCode */
class PatronStatClassCodeResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'StatisticalClassID' => $this->StatisticalClassID,
            'OrganizationID' => $this->OrganizationID,
            'Description' => $this->Description, //
        ];
    }
}
