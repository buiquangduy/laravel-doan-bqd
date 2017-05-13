<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Color;
use DB;
class ColorController extends Controller {
    public function getList()
    {
        $data = Color::select('id','color_name')->orderBy('id','DESC')->get()->toArray();
        return view('admin.color.list',compact('data'));
    }

    public function getAdd()
    {
        return view('admin.color.add');
    }

    public function postAdd(Requests\ColorRequest $request)
    {
        $color = new Color();
        $color->color_name = $request->txtColorName ;
        $color->save();
        return redirect()->route('admin.color.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete add color']);
    }

    public function getDelete($id)
    {
        $colorArr = Color::findOrFail($id)->toArray();
        $color = Color::find($id)->delete();
        if($color) {
            DB::table('products')->where('color_id', '=', $colorArr['id'])->delete();
        }
        return redirect()->route('admin.color.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete delete color']);
    }

    public function getEdit($id)
    {
        $data = Color::findOrFail($id)->toArray();

        return view('admin.color.edit',compact('data','id'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ["txtColorName" => "required"],
            ["txtColorName.required" => "please enter name color"]
        );
        $brand = Color::find($id);

        $brand->color_name = $request->txtColorName;
        $brand->save();
        return redirect()->route('admin.color.getList')->with(['flash_level'=>'success','flash_message' => 'success !! 	complete edit color']);
    }
}
