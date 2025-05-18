<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'position_id' => 'required|integer|exists:positions,id',
            'teacher_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20|regex:/^[0-9+\- ]+$/',
            'education' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'grades' => 'nullable|array',
            'grades.*' => 'integer|exists:grades,id',
            'subjects' => 'nullable|array',
            'subjects.*' => 'integer|exists:subjects,id',
        ];
    }

    /**
     * Get custom validation messages for the defined rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'position_id.required' => 'The position selection is required.',
            'position_id.exists' => 'The selected position is invalid.',

            'name.required' => 'The teacher name is required.',
            'name.string' => 'The teacher name must be a valid string.',
            'name.regex' => 'The name may only contain letters and spaces.',
            'name.max' => 'The teacher name cannot exceed 255 characters.',

            'address.required' => 'The address field is required.',
            'address.max' => 'The address cannot exceed 255 characters.',

            'phone.required' => 'The phone number is required.',
            'phone.max' => 'The phone number cannot exceed 20 characters.',
            'phone.regex' => 'The phone number may only contain numbers, plus, minus and spaces.',

            'education.required' => 'The education field is required.',
            'education.max' => 'The education information cannot exceed 255 characters.',

            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image may not be greater than 2MB.',

            'grades.*.exists' => 'The selected grade is invalid.',
            'subjects.*.exists' => 'The selected subject is invalid.',
        ];
    }
}
