@extends('admin.master')
@section('controller','Material')
@section('action','Add')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error') <!-- phan bat loi -->
        <form action="{!! route('admin.material.getAdd')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Material Name</label>
                <input class="form-control" name="txtMaterialName" placeholder="Please Enter Material Name" />
                <span>{!!$errors->first('txtMaterialName')!!}</span>
            </div>
            <button type="submit" class="btn btn-default">Material Add</button>
            <form>
    </div>
@endsection