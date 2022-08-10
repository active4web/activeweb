<?php

namespace App\Http\Requests\Admin\ServiceDetails;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceDetailRequest extends FormRequest
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
            'id' =>'required|exists:service_details,id',
            'title_ar' => 'required',
            'description_ar'=> 'required',
            
        ];
    }
}
