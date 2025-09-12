<?php

namespace Blashbrook\PAPIForms\App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier */
class MobilePhoneCarrierResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'CarrierID' => $this->CarrierID,
            'CarrierName' => $this->CarrierName,
            'Email2SMSEmailAddress' => $this->Email2SMSEmailAddress,
            'NumberOfDigits' => $this->NumberOfDigits,
            'Display' => $this->Display, //
        ];
    }
}
