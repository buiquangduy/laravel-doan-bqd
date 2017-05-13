<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Transaction;
use App\Order;
use DB;
use Illuminate\Http\Request;
class TransactionController extends Controller {

    public function getList(){
        $tran = DB::table('orders')
            ->join('transactions', 'transactions.id', '=', 'orders.transaction_id')
            ->join('products', 'products.id', '=', 'orders.product_id')
            ->select('products.name as product_name',
                    'orders.id as id',
                    'orders.created_at as created_at',
                    'transactions.user_name as user_name',
                    'orders.qty as qty',
                    'orders.amount as amount',
                    'transactions.status as status')
            ->orderBy('id','DESC')->get();

        return view('admin.transaction.list',compact('tran'));
    }

    public function getDelete($id)
    {
        $orders = Order::find($id);
        $dem = Order::where('transaction_id',$orders->transaction_id)->count();
        $trans = Transaction::find($orders->transaction_id);
        if($dem == 1) {
            $orders->delete($id);
            $trans->delete($orders->transaction_id);
        } else {
            $orders->delete($id);
        }

        return redirect()->route('admin.transaction.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete delete detail transaction']);
    }

    public function newTransaction() {
        $data['data'] = Order::join('transactions', 'orders.transaction_id', '=', 'transactions.id')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->select('orders.id','orders.created_at', 'products.name','orders.product_id', 'transactions.user_name' ,'products.image')
            ->where('is_viewed','=',0)
            ->orderBy('orders.created_at', 'des')
            ->get();
        return json_encode($data);
    }

    function setIsViewed($id){
        $order = Order::find($id);
        $order->is_viewed = 1;
        $result = $order->save();
        if($result){
            return json_encode('ok');
        }else{
            return json_encode('false');
        }
    }

}
