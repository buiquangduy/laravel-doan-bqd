<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ColorRequest extends Request {

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
            'txtColorName' => 'required|unique:colors,color_name'
        ];
    }
    public function messages()
    {
        return [
            'txtColorName.required' => 'bạn phải nhập tên màu sắc',
            'txtColorName.unique' => 'tên màu sắc đã bị trùng',
        ];
    }

}
