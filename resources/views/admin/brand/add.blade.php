@extends('admin.master')
@section('controller','Brand')
@section('action','Add')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error') <!-- phan bat loi -->
        <form action="{!! route('admin.brand.getAdd')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Brand Name</label>
                <input class="form-control" name="txtBrandName" placeholder="Please Enter Brand Name" />
                <span>{!!$errors->first('txtBrandName')!!}</span>
            </div>
            <button type="submit" class="btn btn-default">Brand Add</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <form>
    </div>
@endsection