<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        // $add=[
        //     'x'=>'xyz',
        //     'y'=>'yzx'
        // ];
           
        $user=[
            'name'=>'hari',
            'email'=>'hari@gmail.com',
            'phone'=>'987654321'
        ];
      
        return view('user',compact('user'
    ));

    }
}
