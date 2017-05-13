@extends('admin.master')
@section('controller','Type')
@section('action','Add')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error') <!-- phan bat loi -->
        <form action="{!! route('admin.type.getAdd')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Type Name</label>
                <input class="form-control" name="txtTypeName" placeholder="Please Enter Type Name" />
                <span>{!!$errors->first('txtTypeName')!!}</span>
            </div>
            <button type="submit" class="btn btn-default">Type Add</button>
            <form>
    </div>
@endsection