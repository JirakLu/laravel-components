<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;

class FormRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            "name" => "required|min:2",
            "newsletter" => "accepted",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}