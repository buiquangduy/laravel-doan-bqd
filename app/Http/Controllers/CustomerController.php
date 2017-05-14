<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Customer;
use DB,Session;
class CustomerController extends Controller {
    public function login(Requests\CustomerRequest $request)
    {
        $email = $request->txtCustomerEmail;
        $pass = md5($request->txtCustomerPassword);
        $dataCustomer = DB::table('customers')->where('customer_email', $email)->first();

        if(!empty($dataCustomer)) {
            if ($dataCustomer->customer_email == $email && $dataCustomer->customer_pass == $pass) {
                session(['email' => $dataCustomer->customer_email, 'name' => $dataCustomer->customer_name, 'phone' => $dataCustomer->customer_phone]);
                return redirect('/')->with(['flash_level' => 'success', 'flash_message' => 'Bạn đã đăng nhập thành công']);
            } else {
                return redirect('/')->with(['flash_level' => 'success', 'flash_message' => 'Sai email hoặc mật khẩu']);
            }
        } else {
            return redirect('/')->with(['flash_level' => 'success', 'flash_message' => 'Sai email hoặc mật khẩu']);
        }
    }

    public function logout() {
        Session::forget('email');
        Session::forget('name');
        Session::forget('phone');
        if (!Session::has('email')) {
            return redirect()->route('home');          
        }
    }

    public function getRegister() {
        return view('user.pages.register');
    }

    public function postRegister(Requests\RegisterCustomerRequest $request){
        $customer = new Customer();
        $customer->customer_name = $request->full_name;
        $customer->customer_pass = md5($request->password);
        $customer->customer_email = $request->email;
        $customer->customer_sex = $request->sex;
        $customer->customer_phone = $request->mobile;
        $customer->customer_address = $request->address;
        $customer->save();
        return redirect('/')->with(['flash_level'=>'success','flash_message' => 'Bạn đã đăng ky thành công']);

    }
}
