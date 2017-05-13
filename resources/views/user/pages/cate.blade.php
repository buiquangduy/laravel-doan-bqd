@extends('user.master')
@section('description','Đây là trang loại sản phẩm')
@section('author','Bùi Quang Duy')
@section('content')
<div id="content">
    <div class="wrap_content">
        <div id="content_full">
            <div class="title_box_1"></div><!--title_box_1-->
            <div class="clear"></div>
            <div class="product_list ">
                <ul>
                    @if($dem>0)
                        @foreach($product_cate as $item_productcate)
                            <li>
                                <a href="{!! url('chi-tiet-san-pham',[$item_productcate->id,$item_productcate->alias])!!}" class="img">
                                    <img src="{!!asset('resources/upload/'.$item_productcate->image)!!}" alt=""/>
                                </a>
                                <div class="bg_pro">
                                    <a href="{!! url('chi-tiet-san-pham',[$item_productcate->id,$item_productcate->alias])!!}" class="name" title="">{!!$item_productcate->name!!}</a>
                                    <a href="">Số lượt xem :{!!$item_productcate->view!!}</a><br>
                                    @if($item_productcate->discount > 0)
                                        <img src="{!!asset('public/user/img/sale.png')!!}" style="width:70px;" alt="" id="sale" />
										<div class="price">Giá bán : {!!number_format($item_productcate->price*(100 - $item_productcate->discount)/100,0,",",".")!!}<span style="text-decoration:line-through">({!!number_format($item_productcate->price,0,",",".")!!})</span></div>
                                    @else
										<div class="price">Giá bán : {!!number_format($item_productcate->price,0,",",".")!!}</div>
									@endif
                                    
                                </div><!--bg_pro-->
                            </li>
                        @endforeach
                    @else
                        <h3 style="color: red; margin-left: 30px;">{{$dem_mess}}</h3>
                    @endif
                </ul>
            </div><!--product_list_km-->
        </div><!--content_right-->
        <div id="loai_right">
            <div class="sidewidt">
                <h2 class="heading2"><span>Categories</span></h2>
                <ul class="nav nav-list categories">
                    @if(isset($dem_cate))
                        @foreach($menu_cate as $item)
                            <li>
                                <a href="{!!URL('loai-san-pham',[$item->id,$item->alias])!!}">{!!$item->name!!}</a>
                            </li>
                        @endforeach
                    @else
                        <li>
                            <a href="#">no category</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div><!--wrap_content-->
    <div class="pagination">
        <ul>
            @if($product_cate->currentPage()!=1)
                <li><a href="{!! str_replace('/?','?', $product_cate->url($product_cate->currentPage()-1))!!}">Prev</a>
                </li>
            @endif
            @for($i=1;$i<=$product_cate->lastPage();$i++)
                <li class="{!! ($product_cate->currentPage()==$i)? 'active' : '' !!}">
                    <a href="{!! str_replace('/?','?', $product_cate->url($i))!!}">{!! $i !!}</a>
                </li>
            @endfor
            @if($product_cate->currentPage()!=$product_cate->lastPage())
                <li><a href="{!! str_replace('/?','?', $product_cate->url($product_cate->currentPage() + 1))!!}">Next</a>
                </li>
            @endif
        </ul>
    </div>
</div><!--content-->
@endsection