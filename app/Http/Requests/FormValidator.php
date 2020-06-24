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
                'field-4' => 'required|string',
                'field-7' => 'required|string',
                'field-8' => 'required|string',
                'field-10' => 'required|email',
            ];

            case 2: return [
                'field-12' => 'required|string',
                'field-13' => 'required|integer',
            ];

            case 3: return [
                'field-17' => 'required',
                'field-18' => 'required',
                'field-19' => 'required',
            ];

            case 4: return [
                'field-27' => 'required',
                'field-28' => 'required',
                'field-29' => 'required',
                'field-30' => 'required',
            ];

            case 5: return [
                'field-34' => 'required|string',
                'field-35' => 'required|string',
                'field-36' => 'required|string',
                'field-37' => 'required|string',
                'field-38' => 'required|string',
                'field-39' => 'required|string',
            ];

            case 6: return [
                'field-40' => 'required|date',
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
