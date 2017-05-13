@extends('admin.master')
@section('controller','Brand')
@section('action','list')
@section('content')
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        @foreach($data as $item)
            <tr class="odd gradeX" align="center">
                <td>{{ $i++ }}</td>
                <td>{!! $item['brand_name'] !!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn chắc chắn muốn xóa')"
                                                                          href="{!! URL::route('admin.brand.getDelete',$item['id']) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route('admin.brand.getEdit',$item['id']) !!}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <!-- /.row -->
@endsection
