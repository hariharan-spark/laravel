<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/{name}',function($name){
    return 'hii'   .   $name;
});


Route::get('/product/{id}',function($id){
    return 'product' .   $id;
});

Route::match(['get','post'],'/users',function(Request $req){
    return 'request method is'   .$req->method();
});