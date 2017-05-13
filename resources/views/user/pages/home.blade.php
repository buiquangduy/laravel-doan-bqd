@extends('user.master')
@section('description','Đây là trang chủ')
@section('author','Bùi Quang Duy')
@section('content')
  <div id="content">
    <div id="slider">
      <a href="#"><img src="{!!asset('public/user/img/banner/banner_c7e1249f.jpg')!!}" alt=""/> </a>
      <a href="#"><img src="{!!asset('public/user/img/banner/banner_93db85ed.jpg')!!}" alt=""/> </a>
      <a href="#"><img src="{!!asset('public/user/img/banner/banner_fbd7939d.jpg')!!}" alt=""/> </a>
      <a href="#"><img src="{!!asset('public/user/img/banner/banner_d09bf415.jpg')!!}" alt=""/> </a>
      <a href="#"><img src="{!!asset('public/user/img/banner/banner_ad61ab14.jpg')!!}" alt=""/> </a>
    </div>
    <div class="wrap_content">
      <h2 class="title_box_1"><i class="icon icon_km"></i> Sản phẩm MỚI</h2>
      <div class="clear"></div>
      <div class="product_list">
        <ul>
          @foreach($product as $item)
          <li>
            <a href="{!! url('chi-tiet-san-pham',[$item->id,$item->alias])!!}" class="img">
              <img src="{!!asset('resources/upload/'.$item->image)!!}" alt=""/>
            </a>
            <div class="bg_pro">
              <a href="{!! url('chi-tiet-san-pham',[$item->id,$item->alias])!!}" class="name" title="">{!!$item->name!!}</a>
              <a href="">Số lượt xem :{!!$item->view!!}</a><br>
              @if($item->discount > 0)
				<img src="{!!asset('public/user/img/sale.png')!!}" style="width:70px;" alt="" id="sale" />
                <div class="price">Giá bán : {!!number_format($item->price*(100 - $item->discount)/100,0,",",".")!!}<span style="text-decoration:line-through">({!!number_format($item->price,0,",",".")!!})</span></div>
              @else
                <div class="price">Giá bán : {!!number_format($item->price,0,",",".")!!}</div>
              @endif
            </div><!--bg_pro-->
          </li>
            @endforeach
        </ul>
      </div><!--product_list-->
      <div class="clear"></div>
      <h2 class="title_box_1">Sản phẩm có lượt xem nhiều nhất</h2>
      <div class="clear"></div>
      <div class="product_list">
        <ul>
          @foreach($product_lastest as $item_2)
            <li>
              <a href="{!! url('chi-tiet-san-pham',[$item_2->id,$item_2->alias])!!}" class="img">
                <img src="{!!asset('resources/upload/'.$item_2->image)!!}" alt=""/>
              </a>
              <div class="bg_pro">
                <a href="{!! url('chi-tiet-san-pham',[$item_2->id,$item_2->alias])!!}" class="name" title="">{!!$item_2->name!!}</a>
                <a href="">Số lượt xem :{!!$item_2->view!!}</a><br>
                @if($item_2->discount > 0)
				  <img src="{!!asset('public/user/img/sale.png')!!}" style="width:70px;" alt="" id="sale" />
                  <div class="price">Giá bán : {!!number_format($item_2->price*(100 - $item_2->discount)/100,0,",",".")!!}<span style="text-decoration:line-through">({!!number_format($item_2->price,0,",",".")!!})</span></div>
                @else
                  <div class="price">Giá bán : {!!number_format($item_2->price,0,",",".")!!}</div>
                @endif
              </div><!--bg_pro-->
            </li>
          @endforeach
        </ul>
      </div><!--product_list-->
      <div class="clear"></div>
    </div><!--wrap_content-->
  </div><!--content-->
  <script>
    $(function(){
      slide_width = $("#slider img").width();
      $("#slider").width(slide_width);
      screen_width = $(window).width();
      margin = (screen_width - slide_width)/2;
      $("#slider").css("margin-left",margin);

      $(window).resize(function(){
        screen_width = $(window).width();
        margin = (screen_width - slide_width)/2;
        $("#slider").css("margin-left",margin);
      });
    });
  </script>
 @endsection