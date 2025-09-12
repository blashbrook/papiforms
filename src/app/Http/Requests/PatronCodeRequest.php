<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatronCodeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'PatronCodeID' => ['required', 'integer'],
            'Description' => ['required'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
