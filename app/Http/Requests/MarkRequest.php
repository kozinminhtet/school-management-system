<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkRequest extends FormRequest
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
            'student_id' => 'required|exists:students,id',
            'month' => 'required|string|max:20',
            'marks.myan' => 'required|integer|min:0|max:100',
            'marks.eng' => 'required|integer|min:0|max:100',
            'marks.maths' => 'required|integer|min:0|max:100',
            'marks.geog' => 'required|integer|min:0|max:100',
            'marks.hist' => 'required|integer|min:0|max:100',
            'marks.science' => 'required|integer|min:0|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'student_id.required' => 'Student is required.',
            'student_id.exists' => 'Selected student does not exist.',
            'month.required' => 'Month is required.',
            'marks.*.required' => 'All subject marks are required.',
            'marks.*.integer' => 'Marks must be a number.',
            'marks.*.min' => 'Marks must be at least 0.',
            'marks.*.max' => 'Marks must be 100 or less.',
        ];
    }
}
