<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Sale;
use DB;
class SaleController extends Controller {
    public function getList()
    {
        $data = Sale::select('id','sale_event')->orderBy('id','DESC')->get()->toArray();
        return view('admin.sale.list',compact('data'));
    }

    public function getAdd()
    {
        return view('admin.sale.add');
    }

    public function postAdd(Requests\SaleRequest $request)
    {
        $sale = new Sale();
        $sale->sale_event = $request->txtSaleEvent ;
        $sale->save();
        return redirect()->route('admin.sale.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete add sale event']);
    }

    public function getDelete($id)
    {
        $saleArr = Sale::findOrFail($id)->toArray();
        $sale = Sale::find($id)->delete();
        if($sale) {
            DB::table('products')->where('sale_id', '=', $saleArr['id'])->delete();
        }
        return redirect()->route('admin.sale.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete delete sale']);
    }

    public function getEdit($id)
    {
        $data = Sale::findOrFail($id)->toArray();

        return view('admin.sale.edit',compact('data','id'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ["txtSaleEvent" => "required"],
            ["txtSaleEvent.required" => "please enter event sale"]
        );
        $sale = Sale::find($id);

        $sale->sale_event = $request->txtSaleEvent;
        $sale->save();
        return redirect()->route('admin.sale.getList')->with(['flash_level'=>'success','flash_message' => 'success !! 	complete edit sale event']);
    }
}
