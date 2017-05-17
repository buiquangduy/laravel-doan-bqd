@extends('admin.master')
@section('controller','Detail Transaction')
@section('action','List')
@section('content')
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>CustomerName</th>
            <th>ProductName</th>
            <th>Date</th>
            <th>Payment status</th>
            <th>Payment confirm</th>
            <th>Total</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($trans as $item)
            <tr class="odd gradeX" align="center">
                <td>{!!$item->id!!}</td>
                <td>{!!$item->user_name!!}</td>
                <td>{!!$item->product_name!!}</td>
                <td>
                    {!!
                                \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))
                                ->diffForHumans()
                    !!}
                </td>
                <td><?php echo $item->status==0 ? "in progress" : "paid" ?></td>
                <td><button>confirm</button></td>
                <td>{!!$item->amount!!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('do you want to delete')" href="{!! URL::route('admin.trans.getDelete',$item->id)!!}"> Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection