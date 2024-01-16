<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentLoginRequest extends FormRequest
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
        return [
            'eduid' => 'required|numeric|digits:11',
            'born' => 'required|date',
            'sign' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'eduid.required' => 'Kötelező kitölteni!',
            'eduid.numeric' => 'Csak számokat tartalmazhat!',
            'eduid.digits' => '11 számjegyből kell állnia!',
            'born.required' => 'Kötelező kitölteni!',
            'born.date' => 'Dátum kell, hogy legyen!',
        ];
    }
}
