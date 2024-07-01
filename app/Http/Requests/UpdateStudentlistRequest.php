<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentlistRequest extends FormRequest
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
        $uniNames = ['Uni Würzburg', 'THWS'];
        return [
            'matNr' => 'required | digits:7',
            'name' => 'required | string',
            'uni' => 'required | in:Uni Würzburg,THWS',
            'studiengang' => 'required | string',
            'semester' => 'required | integer',
            'immatrikulation' => 'required | date',
            'exmatrikulation' => 'required | date',
            'profilePic' => 'required | active_url',
            
        ];
    }
}
