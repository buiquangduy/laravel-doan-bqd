<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>product laravel</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="@yield('description')">
<meta name="author" content="@yield('author')">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
<link href="{!! url('public/user/css/bootstrap.css')!!}" rel="stylesheet">
<link href="{!! url('public/user/css/bootstrap-responsive.css')!!}" rel="stylesheet">
<link href="{!! url('public/user/css/style.css')!!}" type="text/css" media="screen" rel="stylesheet">
</head>
<body>
	@include('user.blocks.header')
	@include('user.blocks.nav')
    @yield('content')
    @include('user.blocks.footer')
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{!! url('public/user/js/jquery.js')!!}"></script>
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
<script defer src="{!! url('public/user/js/custom.js')!!}"></script>
<script type="text/javascript" src="{!! url('public/user/js/myscript.js')!!}"></script>
</body>
</html>