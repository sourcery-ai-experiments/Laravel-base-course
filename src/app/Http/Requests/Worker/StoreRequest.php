<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|string',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name is string',
            'surname.required' => 'Surname is required',
            'surname.string' => 'Surname is string',
            'email.required' => 'Email is required',
            'email.email' => 'Email need email format',
            'age.integer' => 'Age is integer',
            'description' => 'Description is string',
        ];
    }
}
