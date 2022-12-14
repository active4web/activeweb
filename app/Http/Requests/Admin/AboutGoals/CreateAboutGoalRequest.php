<?php

namespace App\Http\Requests\Admin\AboutGoals;

use Illuminate\Foundation\Http\FormRequest;

class CreateAboutGoalRequest extends FormRequest
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
        ];
    }
}
