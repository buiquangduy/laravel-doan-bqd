<div id="top">
    <div class="wrap_content">
        <div id="banner_right_scroll">
        </div>
        <?php if(!empty(session('email'))): ?>
        <div id="login_top_session">
            Xin chào : <a href="#"><?=session('name')?></a> | <a href="{!! url('customer/logout') !!}">Đăng xuất</a>
        </div>
        <?php else: ?>
            <div id="login_top">
                <a href="{{url('customer/register')}}">Đăng ký</a>  |  <a href="">Đăng nhập</a>
                <div id="login_form">
                    <form action="{!! route('customer.login')!!}" method="post" name="loginForm" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
                        <input type="text" name="txtCustomerEmail" placeholder="Email đăng nhập" />
                        <input class="style_input" name="txtCustomerPassword" type="password" placeholder="*********"/>
                        <div class="clear"></div>
                        <!-- <a href="" class="l font11 blue" style="line-height:48px; padding-left:10px;">Quên mật khẩu?</a> -->
                        <input style="height:28px; line-height:28px; padding: 0 14px; text-transform:uppercase; color:white; display:block; background:#f60; float:left; border:none; cursor:pointer;" type="submit" value="Đăng nhập">
                        <div class="clear"></div>
                        <p align="left" style="padding-bottom:5px; margin:10px 0 0 0;">Bạn chưa có tài khoản?  
                            <a href="{{url('customer/register')}}" class="blue"><b>Đăng ký ngay</b></a>
                        </p>
                        <input type="hidden" name="return_url" value="">
                        <div class="clear"></div>
                    </form>
                </div><!--login_form-->
            </div><!--login_top-->
        <?php endif; ?>
        <div id="menu_top">
            <ul>
                <li><a href="#">Hợp tác</a> </li>
                <li><a href="#">Hướng dẫn mua hàng</a> </li>
                <li><a href="{!! url('gio-hang')!!}"><i class="icon icon_cart"></i> <span>Giỏ hàng ({{ !empty(session('qty')) ? session('qty') : 0}})</span></a> </li>
            </ul>
        </div><!--menu_top-->
    </div>
</div><!--top-->
<div id="header">
    <div class="wrap_content">
        <a href="" id="logo"><img src="{!!asset('public/user/img/banner/logo.gif')!!}" width="230px" alt=""/> </a>
        <div id="search" class="bg">
            <form method="get" action="{!! route('searchHome')!!}">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}" />
                <input type="text" class="cssText" name="search" placeholder="Gõ từ khóa tìm kiếm..." />
                <input type="submit" class="cssSubmit" value="Tìm kiếm" />
            </form>
        </div><!--search-->
        @if(Session::has('flash_message'))
            <div class="thongbao">
                {!! @Session::get('flash_message') !!}
            </div>
        @endif
    </div>
</div><!--header-->
<div class="clear"></div>