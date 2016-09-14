<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CateRequest extends Request
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
            'txtName' => 'required|unique:Category,Name',
            'txtPrice' => 'required|numeric|min:0.000000000000001',
            'txtPer' => 'required|numeric|between:0,100',
            'txtAmo' => 'required|numeric|min:0',
            //'txtPrice' > 'txtAmo'
        ];
    }
    public function messages(){
        return [
            'txtName.required' => 'Enter a Name',
            'txtName.unique' => 'The Name of Category is existed',
            'txtPrice.required' => 'Enter your Price',
            'txtPrice.min' => 'Enter the Price > 0',
            'txtPrice.numeric' => 'Enter a number',
            'txtPer.required' => 'Enter your Percent',
            'txtPer.numeric' => 'Enter a number',
            'txtPer.between' => 'Enter the value is 0 to 100',
            'txtAmo.required' => 'Enter your Amount',            
            'txtAmo.numeric' => 'Enter a number',
        ];
    }
}
