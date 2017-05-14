@extends('user.master')
@section('description','checkout')
@section('author','Bùi Quang Duy')
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
    <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Trang chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Thanh toán</li>
        @if(Session::has('flash_message'))
          <div class="thongbao">
              {!! @Session::get('flash_message') !!}
          </div>
        @endif
      </ul>
      <div class="row">        
        <!-- Account Login-->
        <div class="span9">
          <div class="checkoutsteptitle"><a class="modify"></a>
          </div>
          <div class="checkoutstep">
            <div class="row">
              <form class="form-horizontal" action="{{route('checkout')}}" method="post">
                <input type="hidden" name="_token" value="{!!csrf_token()!!}"/>
                <fieldset>
                  <h2 style="margin-left: 50px;">Tổng số tiền thanh toán:<span style="color: red">{!!number_format($total,0,",",".")!!}</span>VNĐ</h2>
                  <div class="span4">
                    <div class="control-group">
                      <label class="control-label" >Họ tên<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" name="username"  value="{{ !empty(session('name')) ? session('name') : ''}}" autofocus="true" />
                      </div>
                      <span>{!! $errors->first('username')!!}</span>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Email<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" name="email" value="{{ !empty(session('email')) ? session('email') : ''}}" />
                      </div>
                      <span>{!! $errors->first('email')!!}</span>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Điện thoại<span class="red">*</span></label>
                      <div class="controls">
                        <input type="text" name="telephone" value="{{ !empty(session('phone')) ? session('phone') : ''}}"/>
                      </div>
                      <span>{!! $errors->first('telephone')!!}</span>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Lời nhắn<span class="red">*</span></label>
                      <div class="controls">
                        <textarea name="note">
                            
                        </textarea>
                        <span>{!! $errors->first('note')!!}</span>
                      </div>
                    </div>
                    <div class="control-group">
                      <label class="control-label" >Hình thức thanh toán</label>
                      <div class="controls">
                          <select name="sltPayment">
                              <option value="">--chọn cổng thanh toán</option>
                              <option value="1">Thanh toán tại nhà</option>
                              <option value="2">Bảo kim</option>
                              <option value="3">Ngân lượng</option>
                          </select>
                      </div>
                      <span>{!! $errors->first('sltPayment')!!}</span>
                    </div>
                    <button class="btn btn-orange pull-right" type="submit">Thanh toán</button>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection