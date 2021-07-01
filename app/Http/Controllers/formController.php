<?php

namespace App\Http\Controllers;
use Validator;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function index(Request $request){

        $request->validate([

            'name'=>'required |min:3|max:20',
            'email'=>'required|email'
        ]);
        return $request->input();
    }
}
