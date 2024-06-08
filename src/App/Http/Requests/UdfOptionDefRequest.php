<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UdfOptionDefRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'OrgID' => ['required', 'integer'],
            'UDFOptionID' => ['required', 'integer'],
            'AttrID' => ['required', 'integer'],
            'DisplayOrder' => ['required', 'integer'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
