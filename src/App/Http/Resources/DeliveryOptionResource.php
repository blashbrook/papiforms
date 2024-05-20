<?php

namespace Blashbrook\PAPIForms\App\Http\Resources;

use Blashbrook\PapiformsReact\Facades\DeliveryOption;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin DeliveryOption */
class DeliveryOptionResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'DeliveryOptionID' => $this->DeliveryOptionID,
            'DeliveryOption' => $this->DeliveryOption, //
        ];
    }
}
