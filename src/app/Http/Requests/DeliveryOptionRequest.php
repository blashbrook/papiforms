<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeliveryOptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'DeliveryOptionID' => ['required', 'integer'],
            'DeliveryOption' => ['required'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
