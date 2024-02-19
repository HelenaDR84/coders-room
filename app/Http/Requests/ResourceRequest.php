<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResourceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'type_id'=> 'required|exists:types,id',
            'category_id'=> 'required|exists:categories,id',
            'title'=>'required|string|min:2|max:100',
            'author'=>'required|string|min:2|max:100',
            'recording'=>'required|url',
            'presentation'=>'required|url',
            'repository'=>'required|url',
            'extra_resource_id1'=>'nullable|exists:extra_resources,id',
            'extra_resource_id2'=>'nullable|exists:extra_resources,id',
            'extra_resource_id3'=>'nullable|exists:extra_resources,id',
        ];
    }
}
