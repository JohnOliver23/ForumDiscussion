<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;
class ThemeController extends Controller
{
    public function store (Request $request){
        $this->validate($request,[
            'theme'=>'required'            
        ]);

    $theme = new Theme;
    $theme->theme = $request->input('theme');
    $theme->save();  
    

    return redirect('/posts/create')->with('theme',$theme);
    }
}
