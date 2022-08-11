<?php

namespace App\Http\Requests\Admin\FooterImage;

use Illuminate\Foundation\Http\FormRequest;

class CreateFooterImageRequest extends FormRequest
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
            'name' =>'required',
            'image' => 'required'
        ];
    }
}
