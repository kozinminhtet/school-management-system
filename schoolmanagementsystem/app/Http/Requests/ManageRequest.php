<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ManageRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:grades,grade',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This name is required.',
            'name.string' => 'This name must be a valid string.',
            'name.max' => 'This name cannot exceed 255 characters.',
            'name.unique' => 'This name has already been taken.',
        ];
    }
}
