@extends('admin.master')
@section('controller','Type')
@section('action','Edit')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.blocks.error')
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Type Name</label>
                <input class="form-control" name="txtTypeName" placeholder="Please Enter Type Name" value="{!! old('txtTypeName',isset($data) ? $data['type_name'] : null)!!}"/>
            </div>
            <button type="submit" class="btn btn-default">Type Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <form>
    </div>
    <!-- /.row -->
@endsection
