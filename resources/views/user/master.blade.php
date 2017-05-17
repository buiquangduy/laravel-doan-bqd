<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Gia Bảo Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('description')">
<meta name="author" content="@yield('author')">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{!! url('public/user/css/bootstrap.css')!!}" rel="stylesheet">
<link href="{!! url('public/user/css/bootstrap-responsive.css')!!}" rel="stylesheet">
<link href="{!! url('public/user/css/style.css')!!}" type="text/css" media="screen" rel="stylesheet">
<script type="text/javascript"  src="{!! url('public/user/js/jquery.min.js')!!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/bxslider.js')!!}"></script>

</head>
<body>
	@include('user.blocks.header')
	@include('user.blocks.nav')
    @yield('content')
    @include('user.blocks.footer')
<!-- javascript
    ================================================== -->
<!-- vchat start -->
<script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=86cea85b17fd1ba112b248df8ea13ae1&data=eyJzc29faWQiOjQ3MDM5OTksImhhc2giOiJiM2ZiMTcyZWNlZjZhOGJmMmVlNTA5MTJlYzNiNDNkNCJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>
<!-- vchat end -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>
        $(window).scroll(function(){
            if($(window).scrollTop() > 150) $("#nav").addClass("fixed");
            else $("#nav").removeClass("fixed");
        });
    </script>
<script src="{!! url('public/user/js/bootstrap.js')!!}"></script>
<script  type="text/javascript" src="{!! url('public/user/js/nivo.js')!!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/carousel.js')!!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/common.js')!!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/swfobject.js')!!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/magiczoom.js')!!}"></script>
<script type="text/javascript"  src="{!! url('public/user/js/jquery.fancybox.js')!!}"></script>
<script defer src="{!! url('public/user/js/custom.js')!!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/myscript.js')!!}"></script>
    <script type="text/javascript">
      jQuery(document).ready(function () {
        jQuery('.bxslider').bxSlider({
          minSlides: 1,
          maxSlides: 10,
          slideWidth: 100,
          slideMargin: 10,
          ticker: true,
          speed: 6000
        });
      });
    </script>
</body>
</html>