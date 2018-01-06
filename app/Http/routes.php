<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>'admin'],function(){
	Route::get('/viewAdminKost',"AdminController@viewKost");
	Route::get('/insertform',"AdminController@formKost");
	Route::post('/insertkost',"AdminController@insertKost");
    Route::get('/update/{id}',"AdminController@findUpdate");
	Route::post('/updatekost/{id}',"AdminController@updateKost");
	Route::delete('/delete/{id}',"AdminController@deleteKost");

});

Route::post('/login',"UserController@doLogin");
Route::post('/register',"UserController@doRegister");
Route::get('/logout',"UserController@doLogout");
Route::get('/findkost',"KostController@doViewKost");
Route::get('/search',"KostController@search");
Route::post('/addwish/{id}',"KostController@addWish");
Route::get('/wishlist',"KostController@showWish");
Route::auth();