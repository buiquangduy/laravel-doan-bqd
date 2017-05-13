<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TypeRequest extends Request {

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
            'txtTypeName' => 'required|unique:types,type_name'
        ];
    }
    public function messages()
    {
        return [
            'txtTypeName.required' => 'bạn phải nhập tên kiểu dáng',
            'txtTypeName.unique' => 'tên kiểu dáng đã bị trùng',
        ];
    }

}
