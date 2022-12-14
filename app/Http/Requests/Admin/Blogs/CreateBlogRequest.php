<?php

namespace App\Http\Requests\Admin\Blogs;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
            'title_ar' => 'required',
            'description_ar'=> 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg',
            'category_ar' =>'required',
            
        ];
    }
}
