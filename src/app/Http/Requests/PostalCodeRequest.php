<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostalCodeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'PostalCodeID' => ['required', 'integer'],
            'PostalCode' => ['required'],
            'City' => ['required'],
            'State' => ['required'],
            'CountryID' => ['required', 'integer'],
            'County' => ['required'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
