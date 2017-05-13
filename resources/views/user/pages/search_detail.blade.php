@extends('user.master')
@section('description','Đây là trang tim kiem sản phẩm')
@section('author','Bùi Quang Duy')
@section('content')
<div id="content">
  @if($dem>0)
  <div class="wrap_content">
    <h2 class="title_box_1">Tim thay {{$dem}} san pham</h2>
    <div class="clear"></div>
    <div class="product_list">
      <ul>
        @foreach($product_cate as $item_product_cate)
          <li>
            <a href="{!! url('chi-tiet-san-pham',[$item_product_cate->id,$item_product_cate->alias])!!}" class="img">
              <img src="{!!asset('resources/upload/'.$item_product_cate->image)!!}" alt=""/>
            </a>
            <div class="bg_pro">
              <a href="{!! url('chi-tiet-san-pham',[$item_product_cate->id,$item_product_cate->alias])!!}" class="name" title="">{!!$item_product_cate->name!!}</a>
              <a href="">Số lượt xem :{!!$item_product_cate->view!!}</a><br>
              @if($item_product_cate->discount > 0)
                <a href="" style="color: red ; font-weight: bold">sale</a>
              @endif
              <div class="price">Giá bán : {!!number_format($item_product_cate->price*(100 - $item_product_cate->discount)/100,0,",",".")!!}<span style="text-decoration:line-through">({!!number_format($item_product_cate->price,0,",",".")!!})</span></div>
            </div><!--bg_pro-->
          </li>
        @endforeach
      </ul>
    </div><!--product_list-->
    <div class="clear"></div>
  </div><!--wrap_content-->
  @else
    <h1 style="margin-left: 100px;">Không tìm thấy sản phẩm</h1>
  @endif
</div><!--content-->
@endsection