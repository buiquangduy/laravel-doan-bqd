@extends('admin.master')
@section('controller','Sale')
@section('action','Edit')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.blocks.error')
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Sale Event Name</label>
                <input class="form-control" name="txtSaleEvent" placeholder="Please Enter sale Name" value="{!! old('txtSaleEvent',isset($data) ? $data['sale_event'] : null)!!}"/>
            </div>
            <button type="submit" class="btn btn-default">Sale Edit</button>
            <form>
    </div>
    <!-- /.row -->
@endsection
