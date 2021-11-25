<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupportFileRequest extends FormRequest
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
            'image' => 'required|max:4000|image|mimes:png,jpg,jpeg',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'باید یک فایل اپلود کنید',
            'image.max' => 'حجم فایل نباید بیشتر از 4 مگابایت باشد',
            'image.image' => 'مجاز به اپلود فقط عکس می باشد',
            'image.mimes' => 'فقط فایل های با پسوند png , jpg , jpeg',
        ];
    }
}
