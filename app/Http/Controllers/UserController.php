<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function create(){
        if(\Auth::check()){
            return view('index');
        }else{
            return view('login');
        }
    	
    }

}
