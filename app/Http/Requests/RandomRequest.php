<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RandomRequest extends Request
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
            'table' => 'required|string|in:goals,pleas',
            'n' => 'required|numeric|min:1|max:100',
        ];
    }
}