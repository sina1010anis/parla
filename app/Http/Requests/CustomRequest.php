<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomRequest extends FormRequest
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
            'image' => 'required|max:5100|image|mimes:png,jpg,jpeg',
            'text' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'image|required' => 'لطفا عکس را اپلود کنید',
          'image|max' => 'حجم بیشتر از 5 مگابایت مجاز نمی باشد',
          'image|image' => 'فقط مجاز به اپلود عکس هستید',
          'image|mimes' => 'فقط مجاز به اپلود عکس هستید',
          'text|required' => 'لطفا مشخصات محصول را با دقت پر کنید',
        ];
    }
}
