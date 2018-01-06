<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kost;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function viewKost(){
    	$kost = Kost::all();
    	return view('admin.viewKost')->with(['kost'=>$kost]);
    }
    public function formKost(){
    	return view('admin.formKost');
    }
    public function insertKost(Request $req){
    	$validator = Validator::make($req->all(),[
            'kostname'=>'required|min:5|unique:kostlist',
            'address'=>'required|min:5',
            'rating'=>'numeric|required|min:1|max:5',
            'kostimage'=>'required',
            'desc'=>'required',
            'price'=>'numeric'
        ]);


        if($validator->fails()){

            return redirect()->back()->withErrors($validator->errors());
        }

        $newkost = new Kost();

        $newkost->kostname = $req['kostname'];
        $newkost->alamat = $req['address'];
        $newkost->kostrating = $req['rating'];
        $newkost->kostimage = $req['kostimage']->getClientOriginalName();
        $newkost->description = $req->desc;
        $newkost->price= $req->price;

        $file = $req->kostimage;
        $filename = $file->getClientOriginalName();
        $file->move('img',$filename);

		$newkost->save();


		return redirect()->back();
    }
    public function findUpdate($id){

        $kost = Kost::where('kostID','=',$id)->first();
        return view('admin.updateKost')->with(['kost'=>$kost]);
    }

    public function updateKost(Request $req,$id){
    	$validator = Validator::make($req->all(),[
            'kostname'=>'required|min:5|unique:kostlist',
            'address'=>'required',
            'kostrating'=>'numeric|required|min:1|max:5',
            'kostimage'=>'required',
            'desc'=>'required',
            'price'=>'numeric'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $newkost = Kost::where('kostID','=', $id)->first();
        $newkost->kostname = $req['kostname'];
        $newkost->alamat = $req['address'];
        $newkost->kostrating = $req['rating'];
        $newkost->kostimage = $req['kostimage']->getClientOriginalName();
        $newkost->description = $req->desc;
        $newkost->price= $req->price;
        
        if ($req->file('kostimage')!=null) {
            $file = $req->file('kostimage');
            $filename = $file->getClientOriginalName();
            $file->move('img',$filename);
        }

		$newkost->save();

		return redirect('/viewAdminKost');
    }
    public function deleteKost($id){
		Kost::where('kostID','=',$id)->delete();
		return redirect()->back();
	}

}
