<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Type;
use DB;
class TypeController extends Controller {
    public function getList()
    {
        $data = Type::select('id','type_name')->orderBy('id','DESC')->get()->toArray();
        return view('admin.type.list',compact('data'));
    }

    public function getAdd()
    {
        return view('admin.type.add');
    }

    public function postAdd(Requests\TypeRequest $request)
    {
        $type = new Type();
        $type->type_name = $request->txtTypeName ;
        $type->save();
        return redirect()->route('admin.type.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete add Type']);
    }

    public function getDelete($id)
    {
        $typeArr = Type::findOrFail($id)->toArray();
        $type = Type::find($id)->delete();
        if($type) {
            DB::table('products')->where('type_id', '=', $typeArr['id'])->delete();
        }
        return redirect()->route('admin.type.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete delete Type']);
    }

    public function getEdit($id)
    {
        $data = Type::findOrFail($id)->toArray();

        return view('admin.type.edit',compact('data','id'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ["txtTypeName" => "required"],
            ["txtTypeName.required" => "please enter type name"]
        );
        $type = Type::find($id);

        $type->type_name = $request->txtTypeName;
        $type->save();
        return redirect()->route('admin.type.getList')->with(['flash_level'=>'success','flash_message' => 'success !! 	complete edit Type']);
    }
}
