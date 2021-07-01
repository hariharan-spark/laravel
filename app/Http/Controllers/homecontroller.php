<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
      public function index($name){
         return 'hi home controller name is' .$name;
    }

    //       public function index($id){
    //      return 'hi home controller id is' .$id;
    // }
}
