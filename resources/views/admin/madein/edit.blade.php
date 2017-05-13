@extends('admin.master')
@section('controller','Madein')
@section('action','Edit')
@section('content')
    <!-- /.col-lg-12 -->
    <div class="col-lg-7" style="padding-bottom:120px">
        @include('admin.blocks.error')
        <form action="" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
            <div class="form-group">
                <label>Country name</label>
                <input class="form-control" name="txtCountry" placeholder="Please Enter country Name" value="{!! old('txtCountry',isset($data) ? $data['country'] : null)!!}"/>
            </div>
            <button type="submit" class="btn btn-default">Madein Edit</button>
            <form>
    </div>
    <!-- /.row -->
@endsection
