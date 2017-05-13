<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Madein;
use DB;
class MadeinController extends Controller {
    public function getList()
    {
        $data = Madein::select('id','country')->orderBy('id','DESC')->get()->toArray();
        return view('admin.madein.list',compact('data'));
    }

    public function getAdd()
    {
        return view('admin.madein.add');
    }

    public function postAdd(Requests\MadeinRequest $request)
    {
        $madein = new Madein();
        $madein->country = $request->txtCountry ;
        $madein->save();
        return redirect()->route('admin.madein.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete add made in']);
    }

    public function getDelete($id)
    {
        $madeinArr = Madein::findOrFail($id)->toArray();
        $madein = Madein::find($id)->delete();
        if($madein) {
            DB::table('products')->where('made_id', '=', $madeinArr['id'])->delete();
        }
        return redirect()->route('admin.madein.getList')->with(['flash_level'=>'success','flash_message' => 'success !! complete delete made in']);
    }

    public function getEdit($id)
    {
        $data = Madein::findOrFail($id)->toArray();

        return view('admin.madein.edit',compact('data','id'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            ["txtCountry" => "required"],
            ["txtCountry.required" => "please enter country name"]
        );
        $madein = Madein::find($id);

        $madein->country = $request->txtCountry;
        $madein->save();
        return redirect()->route('admin.madein.getList')->with(['flash_level'=>'success','flash_message' => 'success !! 	complete edit made in']);
    }
}
