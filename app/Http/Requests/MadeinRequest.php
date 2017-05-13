<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MadeinRequest extends Request {

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
            'txtCountry' => 'required|unique:madeins,country'
        ];
    }
    public function messages()
    {
        return [
            'txtCountry.required' => 'bạn phải nhập tên nơi sản xuất',
            'txtCountry.unique' => 'tên nơi sản xuất đã bị trùng',
        ];
    }

}
