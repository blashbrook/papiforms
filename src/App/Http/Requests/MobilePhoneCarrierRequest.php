<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MobilePhoneCarrierRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'CarrierID' => ['required', 'integer'],
            'CarrierName' => ['required'],
            'Email2SMSEmailAddress' => ['required'],
            'NumberOfDigits' => ['required', 'integer'],
            'Display' => ['required', 'integer'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
