@extends('admin.master')
@section('controller','Detail transaction')
@section('action','List')
@section('content')
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>STT</th>
            <th>CustomerName</th>
            <th>ProductName</th>
            <th>Date</th>
            <th>The number of products</th>
            <th>Payment status</th>
            <th>Total</th>
            <th>Delete</th>
        </tr>
        </thead>
        <?php $stt= 0; ?>
        <tbody>
        @foreach($tran as $item)
            <?php $stt = $stt +1;?>
            <tr class="odd gradeX" align="center">
                <td>{!! $stt !!}</td>
                <td>{!!$item->user_name!!}</td>
                <td>{!!$item->product_name!!}</td>
                <td>
                    {!!
                                \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))
                                ->diffForHumans()
                    !!}
                </td>
                <td>{!!$item->qty!!}</td>
                <td><?php echo $item->status==0 ? "unpaid" : "paid" ?></td>
                <td>{!!$item->amount!!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('do you want to delete')" href="{!! URL::route('admin.transaction.getDelete',$item->id)!!}"> Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection