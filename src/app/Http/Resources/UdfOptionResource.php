<?php

namespace Blashbrook\PAPIForms\App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Blashbrook\PAPIForms\App\Models\UdfOption */
class UdfOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'UDFOptionID' => $this->UDFOptionID,
            'AttrID' => $this->AttrID,
            'OptionDesc' => $this->OptionDesc, //
        ];
    }
}
