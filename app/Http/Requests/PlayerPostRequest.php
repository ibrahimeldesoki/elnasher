<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerPostRequest extends FormRequest
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
        // /dd(request()->all());
        return [
            'name' => 'required',
            'age' => 'nullable',
            'country_id' => 'required',
            'dob' => 'nullable',
            'tshirt_number' => 'nullable',
            'length' => 'nullable',
            'foot' => 'nullable|string',
            'position' => 'nullable',
            'status' => 'nullable',
            'retirement_date' => 'nullable',
            'death_date' => 'nullable',
            'img' => 'mimes:jpeg,jpg,png,gif,png|nullable|max:10000'
        ];

    }
}
