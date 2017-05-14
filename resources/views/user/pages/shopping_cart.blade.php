@extends('user.master')
@section('description','gio hang')
@section('author','Bùi Quang Duy')
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
      <ul class="breadcrumb">
        <li>
          <a href="{{url('/')}}">Trang chủ</a>
          <span class="divider">/</span>
        </li>
        <li class="active"> Giỏ hàng</li>
         @if(Session::has('flash_message'))
          <div class="thongbao">
              {!! @Session::get('flash_message') !!}
          </div>
        @endif
      </ul>
      @if($total !=0 )
      <h1 class="heading1"><span class="maintext"></span><span class="subtext">Tất cả sản phẩm trong giỏ hàng của bạn</span></h1>
      <!-- Cart-->
      <div class="cart-info">
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Ảnh</th>
            <th class="name">Tên sản phẩm</th>
            <th class="quantity">Số lượng</th>
              <th class="total">Cập nhật/Xóa</th>
            <th class="price">Giá bán</th>
            <th class="total">Tổng tiền</th>
           
          </tr>
          <form method="POST" action="">
          @foreach($content as $item)
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="{!!asset('resources/upload/'.$item['options']['img'])!!}" height="50" width="50"></a></td>
            <td  class="name"><a href="#">{!!$item['name']!!}</a></td>
            <td class="quantity"><input type="number" min="0" class="span1 qty" size="1" value="{!!$item['qty']!!}" name="quantity[40]" />
             
             </td>
            <td class="total">
              <a class="updatecart" id="{!! $item['rowid']!!}" href="#"><img class="tooltip-test" data-original-title="Update" src="{{asset('public/user/img/update.png')}}" alt="" ></a>
              <a href="{!! url('xoa-san-pham',['id'=>$item['rowid']])!!}"><img class="tooltip-test" data-original-title="Remove"  src="{{asset('public/user/img/remove.png')}}" alt=""></a>
            </td>
           
             
            <td class="price">{!! number_format($item['price'],0,",",".")!!}</td>
            <td class="total">{!! number_format($item['price']*$item['qty'],0,",",".")!!}</td>
          </tr>
          @endforeach
          </form>
        </table>
        @else
          <h1>Chưa có sản phẩm nào trong giỏ hàng</h1>
        @endif
      </div>
      <div class="container">
        @if($total !=0 )
        <div class="pull-right">
            <div class="span4 pull-right">
              <table class="table table-striped table-bordered ">
                <tr>
                  <td><span class="extra bold totalamout">Tổng tiền thanh toán :</span></td>
                  <td><span class="bold totalamout">{!! number_format($total,0,",",".") !!}</span></td>
                </tr>
              </table>
              <a href="{!!route('checkout')!!}" class="btn btn-orange pull-right mr10">Thanh toán</a>
            </div>
          </div>
          @endif
        </div>
    </div>
  </section>
</div>
@endsection