@extends('admin.master')
@section('controller','Material')
@section('action','Edit')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.blocks.error')
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Material Name</label>
                <input class="form-control" name="txtMaterialName" placeholder="Please Enter Material Name" value="{!! old('txtMaterialName',isset($data) ? $data['mate_name'] : null)!!}"/>
            </div>
            <button type="submit" class="btn btn-default">Material Edit</button>
            <form>
    </div>
    <!-- /.row -->
@endsection
