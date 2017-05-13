@extends('user.master')
@section('description','register')
@section('author','Bùi Quang Duy')
@section('content')
    <div id="content">
        <div class="wrap_content">
            <div class="location white"><a href="index.html">Trang chủ</a> &gt;&gt; Đăng ký</div>
            <div class="clear"></div>
            <div class="box_common">
                <div class="title_box_1"><h1>Đăng ký</h1></div><!--title_box_1-->
                <form method="post" action="{!! route('customer.post.register')!!}">
                    <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
                    <fieldset style="border: none;" class="shadow cor">
                        <div class="bgg_in_spm"></div>
                        <table width="100%" id="register">
                            <tbody><tr>
                                <td valign="top">
                                    <table cellpadding="4" cellspacing="0" id="tb_register" style="width: 100%;">
                                        <tbody><tr>
                                            <td width="150px">Địa chỉ Email</td>
                                            <td>
                                                <input type="text" name="email" id="email" class="boxInput" size="20" value="{!! old('email') !!}"><b style="color: #ff0000;">*</b>
                                                <span style="color: #ff0000;" id="check_user">{!!$errors->first('email')!!}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mật khẩu</td>
                                            <td><input type="password" name="password" id="password" class="boxInput" size="20"> <b style="color: #ff0000;">*</b> <span style="color: #ff0000;" class="explain">{!!$errors->first('password')!!}</span></td>
                                        </tr>
                                        <tr>
                                            <td>Nhập lại mật khẩu</td>
                                            <td><input type="password" name="re_password" id="password1" class="boxInput" size="20"><b style="color: #ff0000;">*</b> <span style="color: #ff0000;" class="explain">{!!$errors->first('re_password')!!}</span></td>
                                        </tr>
                                        <tr>
                                            <td>Họ và tên</td>
                                            <td><input type="text" name="full_name" id="full_name" class="boxInput" size="40" value="{!! old('full_name') !!}"><b style="color: #ff0000;">*</b><span style="color: #ff0000;" class="explain">{!!$errors->first('full_name')!!}</span></td>
                                        </tr>
                                        <tr>
                                            <td>Giới tính</td>
                                            <td>
                                                <input type="radio" name="sex" value="male">Nam
                                                <input type="radio" name="sex" value="female">Nữ
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span style="color: #ff0000;">{!!$errors->first('sex')!!}</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Địa chỉ nhận hàng</td>
                                            <td><input type="text" name="address" id="address" class="boxInput" size="50" value="{!! old('address') !!}"><span style="color: #ff0000;">{!!$errors->first('address')!!}</span></td>
                                        </tr>
                                        <tr>
                                            <td>Điện thoại di động</td>
                                            <td><input type="text" name="mobile" id="mobile" class="boxInput" size="40" value="{!! old('mobile') !!}"><span style="color: #ff0000;">{!!$errors->first('mobile')!!}</span></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>
                                                <input type="submit" value="Đăng ký" class="btn_3">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </fieldset>
                </form>
            </div>
        </div><!--wrap_content-->
    </div>
@endsection