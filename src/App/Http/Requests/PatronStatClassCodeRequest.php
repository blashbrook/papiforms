<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatronStatClassCodeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'StatisticalClassID' => ['required', 'integer'],
            'OrganizationID' => ['required', 'integer'],
            'Description' => ['required'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
