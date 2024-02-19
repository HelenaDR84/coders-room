<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeRequest extends FormRequest
{
   
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title'=>'required|string|min:2|max:100',
        ];
    }
}
