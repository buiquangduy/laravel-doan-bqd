<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RegisterCustomerRequest extends Request {

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
            'email' => 'required|unique:customers,customer_email|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9+])*(\.[a-z]{2,4}){1,2}$/',
            'full_name' => 'required',
            'password' => 'required',
            're_password' => 'required|same:password',
            'sex' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Bạn chưa nhập email',
            'email.unique' => 'Email của bạn đã được sử dụng',
            'email.regex' => 'Email của bạn không hợp lệ',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            're_password.required' => 'Bạn chưa nhập lại mật khẩu',
            're_password.same' => 'Không khớp với mật khẩu',
            'full_name.required' => 'Bạn chưa nhập tên',
            'sex.required' => 'Bạn chưa chọn giới tính',
            'mobile.required' => 'Bạn chưa nhập số điện thoại',
            'address.required' => 'Bạn chưa nhập địa chỉ giao hàng',
        ];
    }

}
