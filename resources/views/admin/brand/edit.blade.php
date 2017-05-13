@extends('admin.master')
@section('controller','Brand')
@section('action','Edit')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.blocks.error')
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtBrandName" placeholder="Please Enter Brand Name" value="{!! old('txtBrandName',isset($data) ? $data['brand_name'] : null)!!}"/>
            </div>
            <button type="submit" class="btn btn-default">Brand Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <form>
    </div>
    <!-- /.row -->
@endsection
