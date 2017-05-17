<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitsValidate extends FormRequest
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
            'record_date'=>'required',
        	'patient_id'=>'required',
        	'patient_no'=>'required'	
        ];
    }
}
