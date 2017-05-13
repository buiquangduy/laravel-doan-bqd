@extends('admin.master')
@section('controller','Sale')
@section('action','Add')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.error') <!-- phan bat loi -->
        <form action="{!! route('admin.sale.getAdd')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Sale Event Name</label>
                <input class="form-control" name="txtSaleEvent" placeholder="Please Enter Sale Event Name" />
                <span>{!!$errors->first('txtSaleEvent')!!}</span>
            </div>
            <button type="submit" class="btn btn-default">Sale Add</button>
            <form>
    </div>
@endsection