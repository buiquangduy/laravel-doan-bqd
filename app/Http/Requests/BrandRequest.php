<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BrandRequest extends Request {

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
            'txtBrandName' => 'required|unique:brands,brand_name'
        ];
    }
    public function messages()
    {
        return [
            'txtBrandName.required' => 'bạn phải nhập tên nhãn hiệu',
            'txtBrandName.unique' => 'tên nhãn hiệu đã bị trùng',
        ];
    }

}
