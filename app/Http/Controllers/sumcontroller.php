<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sumcontroller extends Controller
{
    public function index(Request $request){
        
        $c = $request->a + $request->b;
        return view('sum',['output'=>$c]);
    }
}
