<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SaleRequest extends Request {

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
            'txtSaleEvent' => 'required|unique:sales,sale_event'
        ];
    }
    public function messages()
    {
        return [
            'txtSaleEvent.required' => 'bạn phải nhập tên sự kiện giảm giá',
            'txtSaleEvent.unique' => 'tên sự kiện giảm giá đã bị trùng',
        ];
    }

}
