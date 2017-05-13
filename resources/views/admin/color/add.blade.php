@extends('admin.master')
@section('controller','Color')
@section('action','Add')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error') <!-- phan bat loi -->
        <form action="{!! route('admin.color.getAdd')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Color Name</label>
                <input class="form-control" name="txtColorName" placeholder="Please Enter Color Name" />
                <span>{!!$errors->first('txtColorName')!!}</span>
            </div>
            <button type="submit" class="btn btn-default">Color Add</button>
            <form>
    </div>
@endsection