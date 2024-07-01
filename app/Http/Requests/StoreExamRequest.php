<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamRequest extends FormRequest
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
            //
            'name' => 'required|array',
            'name.*' => 'required|string|max:225',
            'cp' => 'required|array',
            'cp.*' => 'required|string|max:225',
            'wertung' => 'required|array',
            'wertung.*' => 'required|in:bestanden,nicht bestanden' 
            
        ];
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'wertung.*.in' => 'Die Wertung muss entwerder "bestanden" oder "nicht bestanden sein'
        ];
    }
}

    

