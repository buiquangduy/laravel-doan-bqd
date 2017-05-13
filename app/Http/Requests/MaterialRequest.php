<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MaterialRequest extends Request {

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
            'txtMaterialName' => 'required|unique:materials,mate_name'
        ];
    }
    public function messages()
    {
        return [
            'txtMaterialName.required' => 'bạn phải nhập tên chất liệu',
            'txtMaterialName.unique' => 'tên chất liệu đã bị trùng',
        ];
    }

}
