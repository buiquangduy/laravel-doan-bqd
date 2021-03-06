<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Shop thời trang nam Gia Bảo sự lựa chọn hoàn hảo">
    <meta name="author" content="Bùi Quang Duy">
    <title>Thời trang Gia Bảo</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('public/admin/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Mystyle CSS -->
    <link href="{{ url('public/admin/dist/css/style.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ url('public/admin/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') }}" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="{{ url('public/admin/bower_components/datatables-responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
    <!-- CKEditor && CKFinder-->
	<script src="{{ url('public/admin/js/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ url('public/admin/js/ckfinder/ckfinder.js')}}"></script>
    <script type="text/javascript">
		var baseURL = "{!! url('/') !!}";
	</script>
     <script src="{{ url('public/admin/js/func_ckfinder.js')}}"></script>
     <!--END  CKEditor && CKFinder-->
    <!-- jQuery -->
    <script src="{{ url('public/admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Hello - {!! Auth::user()->username !!}</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-envelope"></i>  <i class="fa fa-caret-down"></i>
                        <span class="badge bg-green"></span>
                    </a>
                    <ul id="notify" class="dropdown-menu list-unstyled msg_list" role="menu">
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{!! url('auth/logout') !!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-message -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.cate.getList')!!}">List Category</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.cate.getAdd')!!}">Add Category</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cube fa-fw"></i> Product<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.product.getList')!!}">List Product</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.product.getAdd')!!}">Add Product</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> User<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.user.getList')!!}">List User</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.user.getAdd')!!}">Add User</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-leaf"></i> Brand<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.brand.getList')!!}">List Brand</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.brand.getAdd')!!}">Add Brand</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-fire"></i> Color<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.color.getList')!!}">List Color</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.color.getAdd')!!}">Add Color</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-eye-open"></i> Made In<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.madein.getList')!!}">List Madein</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.madein.getAdd')!!}">Add Madein</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-warning-sign"></i> Material<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.material.getList')!!}">List Material</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.material.getAdd')!!}">Add Material</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-thumbs-down"></i> Sale<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.sale.getList')!!}">List sale event</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.sale.getAdd')!!}">Add sale event</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-certificate"></i> Type<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.type.getList')!!}">List type</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.type.getAdd')!!}">Add type</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Order<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.transaction.getList')!!}">List Order</a>
                                </li>
                                <li>
                                    <a href="{!! route('admin.trans.getList')!!}">List Transaction</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-hand-up"></i> Report<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! route('admin.report.tunover')!!}">Tunover</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
            	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">@yield('controller')
                            <small>@yield('action')</small>
                        </h1>
                    </div>
                    <div class="col-lg-12">
                    <!-- cho nay hien thong bao -->
                    	@if(Session::has('flash_message'))
                        	<div class="alert alert-{!! @Session::get('flash_level') !!}">
                            	{!! @Session::get('flash_message') !!}
                            </div>
                        @endif
                    </div>
                    
                   <!-- đây là nơi chứa nội dung -->
                    
                    	@yield('content')
                    <!-- đây là nơi chứa nội dung -->
                 </div>   
                    <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('public/admin/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>
    <!-- moment js -->
    <script src="{{ url('public/admin/js/moment/moment.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ url('public/admin/dist/js/sb-admin-2.js')}}"></script>
	<script src="{{ url('public/admin/js/myscript.js')}}"></script>
    <script src="{{ url('public/admin/dist/js/services.js')}}"></script>
    <script src="{{ url('public/admin/js/notify.js')}}"></script>
    <!-- DataTables JavaScript -->
    <script src="{{ url('public/admin/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('public/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    @yield('js')
</body>

</html>
