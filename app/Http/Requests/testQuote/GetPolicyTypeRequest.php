<?php

namespace App\Http\Requests\testQuote;

use Illuminate\Foundation\Http\FormRequest;

class GetPolicyTypeRequest extends FormRequest
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
            //
            'company_name'=>['required','string','exists:insurance_companies,existance_name'],         //yeh bad
            'policy_type'=>['required','in:whole,term'],
            'level'=>['required',]
                 
        ];
    }
}
