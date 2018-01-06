<?php

namespace App\Http\Controllers;

use App\User;
use App\Wish;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Kost;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KostController extends Controller
{
    //
    public function doViewKost(){
    	$kost=Kost::paginate(2);
    	return view('Kost')->with(['kost'=>$kost]);
    }
    public function search(Request $req){
        $search=$req->search;
        $kost= Kost::where('kostname','like','%'.$search.'%')->paginate(2);

        return view('Kostlist')->with([
            'kost' => $kost,
            'search'=>$search
        ]);

    }
    public function addWish($id){

//        $check =DB::table('wishlist')->whereColumn([['userid','=',(Auth::user()->id)],['kostid','=',$id]])->get();
//        dd($check);
            $newWishList = new Wish();

            $newWishList->userid = Auth::user()->id;
            $newWishList->kostid = $id;
            $newWishList->save();

        return redirect()->back();
    }

    public function showWish(){
        $wish = Wish::where('userid','=',Auth::user()->id)->get();


        $kost=[];

        foreach ($wish as $w){
            $k = Kost::where('kostID',$w->kostid)->get();
            $kost[$w->kostid]=$k;
        }
        return view('wishlist',['kost'=>$kost]);

    }
}
