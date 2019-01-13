<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Theme;
class PostController extends Controller
{
    public function index(){
    	
        $posts = Post::orderBy('titulo','asc')->paginate(1);
    	return view('posts.index')->with('posts',$posts);
    }
    public function create(){
        $themes =  Theme::all();
    	return view('posts.create')->with('themes',$themes);
    }
    public function show($id){
    	$post = Post::find($id);
    	return view('posts.show')->with('post',$post);
    }
    public function store(Request $request){
    $this->validate($request,[
            'titulo'=>'required',
            'body'=>'required'
        ]);
    return view('posts.index');
    }
}
