<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
            'register_no' => [
                'required',
                'string',
                'max:50',
                Rule::unique('students')->ignore($this->route('id')),
            ],
            'student_name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'grade_id' => 'required|integer|exists:grades,id',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:20|regex:/^[0-9+\s\-()]+$/',
            'gender' => 'required|in:male,female,other',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'register_no.required' => 'Register number is required.',
            'register_no.unique'   => 'This register number is already taken.',

            'student_name.required' => 'Student name is required.',
            'student_name.regex'    => 'The name may only contain letters and spaces.',

            'grade_id.required' => 'Please select a grade.',
            'grade_id.exists'   => 'Selected grade does not exist.',

            'father_name.required' => 'Father name is required.',
            'mother_name.required' => 'Mother name is required.',

            'address.required' => 'Address is required.',

            'phone.required' => 'Phone number is required.',
            'phone.regex'    => 'Phone number format is invalid.',

            'gender.required' => 'Gender is required.',
            'gender.in'       => 'Gender must be male, female, or other.',

            'image.image' => 'Uploaded file must be an image.',
            'image.mimes' => 'Image must be a jpeg, png, jpg, or gif.',
            'image.max'   => 'Image must not exceed 2MB in size.',
        ];
    }
}
