<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    //
    public function doRegister(Request $req){
        $newUser = new User();
        $newUser->name = $req['name'];
        $newUser->email = $req['email'];
        $newUser->password = $req['password'];
        

        $newUser->save();
        return redirect('/');
    }
    public function doLogin(Request $req){
        
        if(Auth::attempt(['email'=> $req->email,'password'=>$req->password])){

            return redirect('/');
        }
        return redirect('/');	
    }
    public function doLogout(){
        Auth::logout();
        return redirect('/');
    }
}
