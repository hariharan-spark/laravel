<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customercontroller extends Controller
{
    public function index(){
         return view('customer');
    }
      public function post(){
         return view('post');
    }
}
 