@extends('admin.master')
@section('controller','Madein')
@section('action','Add')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error') <!-- phan bat loi -->
        <form action="{!! route('admin.madein.getAdd')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Country</label>
                <input class="form-control" name="txtCountry" placeholder="Please Enter Country Name" />
                <span>{!!$errors->first('txtCountry')!!}</span>
            </div>
            <button type="submit" class="btn btn-default">Madein Add</button>
            <form>
    </div>
@endsection