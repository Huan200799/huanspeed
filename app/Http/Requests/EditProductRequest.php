<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'product_name' => 'required:|min:2',
            'description' => 'required|min:6|max:255',
        ];
    }
    public function messages()
    {
        return[
            'product_name.min'=>'Tên phải có ít nhất 2 kí tự',
            'description.min'=>'Miêu tả phải có ít nhất 6 kí tự',
            'description.max'=>'Miêu tả phải có ít nhất 255 kí tự',
            'image.product_img' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
        ];
    }
}
