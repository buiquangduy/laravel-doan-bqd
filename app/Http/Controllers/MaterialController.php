<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Material;
use DB;
class MaterialController extends Controller {
    public function getList()
    {
        $data = Material::select('id','mate_name')->orderBy('id','DESC')->get()->toArray();
        return view('admin.material.list',compact('data'));
    }

    public function getAdd()
    {
        return view('admin.material.add');
    }

    public function postAdd(Requests\MaterialRequest $request)
    {
        $material = new Material();
        $material->mate_name = $request->txtMaterialName ;
        $material->save();
        return redirect()->route('admin.material.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete add material']);
    }

    public function getDelete($id)
    {
        $materialArr = Material::findOrFail($id)->toArray();
        $material = Material::find($id)->delete();
        if($material) {
            DB::table('products')->where('mate_id', '=', $materialArr['id'])->delete();
        }
        return redirect()->route('admin.material.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete delete material']);
    }

    public function getEdit($id)
    {
        $data = Material::findOrFail($id)->toArray();

        return view('admin.material.edit',compact('data','id'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ["txtMaterialName" => "required"],
            ["txtMaterialName.required" => "please enter material name "]
        );
        $brand = Material::find($id);

        $brand->mate_name = $request->txtMaterialName;
        $brand->save();
        return redirect()->route('admin.material.getList')->with(['flash_level'=>'success','flash_message' => 'success !! 	complete edit Material']);
    }
}
