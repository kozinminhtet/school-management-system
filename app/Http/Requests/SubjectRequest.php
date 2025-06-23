<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubjectRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'type' => 'required|in:subject-major,subject-minor',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The subject name is required.',
            'type.required' => 'The subject type is required.',
            'type.in' => 'The subject type must be either major or minor.',
        ];
    }
}
