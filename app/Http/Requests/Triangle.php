<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Triangle extends FormRequest
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
            "sideA" => "required|numeric|gt:0",
            "sideB" => "required|numeric|gt:0",
            "sideC" => "required|numeric|gt:0",
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param  \Illuminate\Validation\Validator  $validator
     * @return void
    */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $a = $this->get('sideA');
            $b = $this->get('sideB');
            $c = $this->get('sideC');

            if ($a + $b <= $c || $b + $c <= $a || $c + $a <= $b) {
                $validator->errors()->add(null, "With this values is not possible to make a triangle! :/ ");
            }
        });
    }
}
