<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaypalRequest extends Request
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
            'txtClientId' => 'required',
            'txtclientSecret' => 'required',
            'txtAmount' => 'required|numeric|min:0',
            //'txtPrice' > 'txtAmo'
        ];
    }
    public function messages(){
        return [
            'txtClientId.required' => 'Enter the Client ID',
            'txtclientSecret.required' => 'Enter your Client Secret',
            'txtAmount.min' => 'Enter the Amount > 0',
            'txtAmount.required' => 'Enter your Amount',            
            'txtAmount.numeric' => 'Enter the number',
        ];
    }
}
