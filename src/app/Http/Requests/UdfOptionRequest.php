<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UdfOptionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'UDFOptionID' => ['required', 'integer'],
            'AttrID' => ['required', 'integer'],
            'OptionDesc' => ['required'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
