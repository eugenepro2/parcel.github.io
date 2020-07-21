<?php

namespace App\Http\Requests;


use App\Field;
use Illuminate\Foundation\Http\FormRequest;

class FormValidator extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch($this->id){
            case 1: return [
                'field-1' => 'required|string',
                'field-2' => 'required|string',
                'field-3' => 'required|string',
                'field-4' => 'required|integer',
                'field-5' => 'required|string',
                'field-6' => 'required',
                'field-8' => 'required',
                'field-10' => 'required',
                'field-11' => 'required|string',
                'field-12' => 'required|string',
                'field-13' => 'required|string',
                'field-15' => 'required|email',
            ];

            case 2: return [
                'field-17' => 'required|string',
                'field-18' => 'required|integer',
            ];

            case 3: return [
                'field-22' => 'required',
                'field-23' => 'required',
                'field-25' => 'required',
            ];

            case 4: return [
                'field-28' => 'required',
                'field-33' => 'required',
            ];

            case 5: return [
                'field-40' => 'required|string',
                'field-41' => 'required|string',
                'field-42' => 'required|string',
                'field-43' => 'required|string',
                'field-44' => 'required|string',
                'field-45' => 'required',
                'field-46' => 'required|email',
                'field-47' => 'required|string',
                'field-48' => 'required|string',
                'field-49' => 'required|string',
            ];

            case 6: return [
                'field-50' => 'required|date',
            ];

        }

    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => 'Dies ist ein Pflichtfeld.',
            'string' => 'Text eingeben',
            'date' => 'Ungültiges Datumsformat',
            'email' => 'Ungültiges e-mail format',
        ];
    }
}
