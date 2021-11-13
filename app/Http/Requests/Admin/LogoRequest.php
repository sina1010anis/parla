<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LogoRequest extends FormRequest
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
            'image' => 'required|mimes:png,jpg,jpeg|image'
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'فایل اپلودی را انتخاب کنید',
            'image.mimes' => 'باید عکس اپلود کنید فقط فایل های png , jpg , jpeg',
            'image.image' => 'فقط عکس قابل اپلود است',
        ];
    }
}
