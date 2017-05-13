<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use DB;
class BrandController extends Controller {
    public function getList()
    {
        $data = Brand::select('id','brand_name')->orderBy('id','DESC')->get()->toArray();
        return view('admin.brand.list',compact('data'));
    }

    public function getAdd()
    {
        return view('admin.brand.add');
    }

    public function postAdd(Requests\BrandRequest $request)
    {
        $brand = new Brand();
        $brand->brand_name = $request->txtBrandName ;
        $brand->save();
        return redirect()->route('admin.brand.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete add brand']);
    }

    public function getDelete($id)
    {
        $brandArr = Brand::findOrFail($id)->toArray();
        $brand = Brand::find($id)->delete();
        if($brand) {
            DB::table('products')->where('brand_id', '=', $brandArr['id'])->delete();
        }
        return redirect()->route('admin.brand.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete delete brand']);
    }

    public function getEdit($id)
    {
        $data = Brand::findOrFail($id)->toArray();

        return view('admin.brand.edit',compact('data','id'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ["txtBrandName" => "required"],
            ["txtBrandName.required" => "please enter name brand"]
        );
        $brand = Brand::find($id);

        $brand->brand_name = $request->txtBrandName;
        $brand->save();
        return redirect()->route('admin.brand.getList')->with(['flash_level'=>'success','flash_message' => 'success !! 	complete edit brand']);
    }
//
//    public function getSearch(Request $request)
//    {
//        $search = $request->input('search');
//        if($search=="")
//        {
//            return redirect()->route('admin.cate.getList')->with(['flash_level'=>'fail','flash_message' => 'fail !! please enter category name']);
//        }
//        else
//        {
//            $cate = cate::where('name','like',"%$search%")->select('id','name','alias','order','parent_id','description','created_at','updated_at')->paginate(5);
//            $sosp = count($cate);
//            return view('admin.cate.search',compact('cate','sosp'));
//        }
//
//    }

}
