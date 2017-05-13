@extends('admin.master')
@section('controller','Color')
@section('action','Edit')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.blocks.error')
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Category Name</label>
                <input class="form-control" name="txtColorName" placeholder="Please Enter Color Name" value="{!! old('txtColorName',isset($data) ? $data['color_name'] : null)!!}"/>
            </div>
            <button type="submit" class="btn btn-default">Color Edit</button>
            <button type="reset" class="btn btn-default">Reset</button>
            <form>
    </div>
    <!-- /.row -->
@endsection
