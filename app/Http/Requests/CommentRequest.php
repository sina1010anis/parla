<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
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
            'text' => 'required',
            'title' => 'required',
            'designing' => 'required',
            'possibilities' => 'required',
            'value' => 'required',
            'quality' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:2048'
        ];
    }

    public function messages()
    {
        return [
          'title.required' => 'وارد کردن موضوع الزامی می باشد',
          'text.required' => 'وارد کردن متن الزامی می باشد',
          'image.image' => 'اپلود عکس فقط امکان پذیر است',
          'image.mimes' => 'فقط فرمت jpg , png , jpeg قابل اپلود است',
          'image.max' => 'حجم عکس بیشتر از 2 مگابایت مجاز نمی باشد',
        ];
    }
}
