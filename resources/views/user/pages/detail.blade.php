@extends('user.master')
@section('description','Đây là trang chi tiet sản phẩm')
@section('author','Bùi Quang Duy')
@section('content')
<div id="content" class="page_detail">
    <div class="location">Chi tiết sản phẩm</div>
    <div class="clear"></div>
    <div class="wrap_content">
        <div id="product_detail">
            <div id="img_product">
                <div id="img_large">
                    <a class="MagicZoom" id="Zoomer" rel="selectors-effect-speed: 600" href="{!!asset('resources/upload/'.$product_detail->image)!!}" title="" style="position: relative; display: inline-block; text-decoration: none; outline: 0px; overflow: hidden; width: auto; height: auto;">
                        <img src="{!!asset('resources/upload/'.$product_detail->image)!!}" alt="" style="opacity: 1;"><div class="MagicZoomPup" style="z-index: 10; position: absolute; overflow: hidden; display: none; visibility: hidden; width: 169px; height: 158px; opacity: 0.5; left: 122px; top: 165px;">
                        <img src="{!!asset('resources/upload/'.$product_detail->image)!!}" alt="" style="opacity: 0.009; position: absolute; z-index: 5;"></div>
                        <div class="MagicZoomHint" style="display: block; overflow: hidden; position: absolute; visibility: visible; z-index: 1; left: 2px; right: auto; top: 2px; bottom: auto; opacity: 0.75; max-width: 289px;">Zoom</div>
                    </a>
                </div><!--img_large-->
                <ul id="img_thumb">
                    @foreach($image as $item_image)
                    <li>
                        <a class="img_thumb" id="fancybox-media" href="{!!asset('resources/upload/detail/'.$item_image->image)!!}"  style="outline: 0px; display: inline-block;">
                            <img src="{!!asset('resources/upload/detail/'.$item_image->image)!!}" alt="">
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div><!--img_product-->
            <div id="overview">
                <h1>{!! $product_detail->name !!}</h1>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                    <!-- js facebook -->
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-57203db1c54e39c4"></script>
                    <div class="addthis_inline_share_toolbox_7gsr"></div>
                    <!-- end js facebook -->
                </div>
                <div class="space2"></div>
                <div class="price_detail">
                    <table cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <td>GIÁ BÁN: </td>
                            <td>
                                <b style="font-size:30px;">{!!number_format($product_detail->price*(100 - $product_detail->discount)/100,0,",",".")!!}đ</b><br>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
				 @if($product_detail->discount > 0)
					<img src="{!!asset('public/user/img/sale.png')!!}" alt="" width="100px;" />
				@endif
                <table id="tbl_config" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td>Màu sắc: {{$product_detail->color_name}}</td>
                        </tr>
                        <tr>
                            <td>Kích thước:{{$product_detail->size_name}}</td>
                        </tr>
                        <tr>
                            <td>Thương hiệu:{{$product_detail->brand_name}}</td>
                        </tr>
                        <tr>
                            <td>Made in: {{$product_detail->country}}</td>
                        </tr>
                    </tbody>
                </table>
                <p>&nbsp;</p>
                <a href="{!! url('mua-hang',[$product_detail->id,$product_detail->alias]) !!}" class="icon btn_buy"></a>
                <!-- facebook script start -->
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=284379612010704";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="500" data-numposts="1"></div>
                <!-- facebook script end -->
            </div><!--overview-->
            <div class="clear"></div>
        </div><!--product-detail-->
        <div class="clear"></div>
        <div class="similar_pro">
            @if(count($product_cate) > 0)
            <div class="title_box_2"><h2 class="title_tab current">Sản phẩm cùng loại</h2></div><!--title_box_2-->
            <a href="#" class="icon prev hidden" style="display: none;"></a>
            <a href="#" class="icon next hidden" style="display: none;"></a>
            <div class="clear"></div>
            <div class="box_content">
                <ul class="bxslider">
                    @foreach($product_cate as $item_product_cate)
                    <li>
                        <a href="{!! url('chi-tiet-san-pham',[$item_product_cate->id,$item_product_cate->alias])!!}" class="img"><img src="{!!asset('resources/upload/'.$item_product_cate->image)!!}" alt="Áo thun lót nỉ AT - 3748"></a>
                        <a href="{!! url('chi-tiet-san-pham',[$item_product_cate->id,$item_product_cate->alias])!!}" class="name">{!! $item_product_cate->name !!}</a>
                    </li>
                    @endforeach
                </ul>
            </div><!--box-content-->
            @endif
        </div><!--similar_pro-->
        <div class="clear"></div>
        <p>&nbsp;</p>
        <div class="similar_pro">
            <div class="title_box_2"><a href="#tab1" class="title_tab current">Miêu tả</a></div>
            <div class="box_content">
                <div id="tab1" class="cf" style="display: block;"><p>&nbsp;</p>
                    <h2>Mô tả SP:</h2>
                    <p>{!! $product_detail->description !!}</p>
                    <p>{!! $product_detail->content !!}</p>
                </div>
            </div><!--box-content-->
    </div><!--wrap_content-->
</div>
<script type="text/javascript">
    $(document).ready(function () {
      MagicZoom.options = {
        'disable-zoom' : false,
        'selectors-change' : 'click',
        'zoom-width' : 350,
        'zoom-height' : 350,
        'rightClick':'true'
      };
    });
</script>
@endsection