<?php

use App\Http\Controllers\customercontroller;
use App\Http\Controllers\formController;

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mahi', function () {
    return view('sample');
});
Route::get('/xam', function () {
    return view('example');
});

Route::get('/user', [customercontroller::class, 'index']);
// Route::get('/post', [customercontroller::class, 'post']);



// form validation
Route::get('/form', function () {
    return view('form');
});
Route::post('/form-controller', [formController::class, 'index']);
// form validation end



Route::get('/mahi', [UserController::class, 'index']);

// Route::get('/user', [sumcontroller::class, 'index']);



// routes tutorial

// Route::get('/user', function () {
//     return view('Customer');
// });
// Route::get('/post', function () {
    
//     return view('post');
// });

// -------*-------



// controller tutorial

// Route::get('/home/{name}', [homecontroller::class, 'index']);

// Route::get('/homec/{id}', [homecontroller::class, 'index']);




// blade template layouts

Route::get('/home', function () {
    
    return view('index');
});

Route::get('/about', function () {
    
    return view('about');
});
Route::get('/contact', function () {
    
    return view('contact');
});


// layout end








