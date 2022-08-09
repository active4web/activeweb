<?php

namespace App\Http\Requests\Admin\OurWork;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOurWorkRequest extends FormRequest
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
            'id' =>'required|exists:our_works,id',
            'title_ar' => 'required',
            'description_ar'=> 'required',
           
        ];
    }
}
