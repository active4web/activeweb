<?php

namespace App\Http\Requests\Admin\BlogComponents;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBlogComponentRequest extends FormRequest
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
            'id' =>'required|exists:blog_components,id',
            'title_ar' => 'required',
            'description_ar'=> 'required',
        ];
    }
}
