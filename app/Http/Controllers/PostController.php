<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Theme;
use Illuminate\Support\Facades\Input;
class PostController extends Controller

{
    public function index(){
        if(Input::get('query')){
            $query = Post::where('titulo', Input::get('query'))
            ->orWhere('titulo', 'like', '%' . Input::get('query') . '%')->paginate(3);
            return view('posts.index')->with('posts',$query);
        }else{
            $posts = Post::orderBy('post','asc')->paginate(3);
            return view('posts.index')->with('posts',$posts);
        }
    }

    public function postsByTheme(Request $r){
        if(Input::get('query')){
            $query = Post::where('titulo', Input::get('query'))
            ->orWhere('titulo', 'like', '%' . Input::get('query') . '%')->paginate(3);
            return view('posts.index')->with('posts',$query);
        }else{
            $id = $r->id;
            $posts = Post::where('theme_id',$id)->paginate(3);
            return view('posts.index')->with('posts',$posts);
        }
    }

    public function create(){
        $themes = Theme::orderBy('theme','asc')->get();
    	return view('posts.create')->with('themes',$themes);
    }
    public function show($id){
    	$post = Post::find($id);
    	return view('posts.show')->with('post',$post);
    }
    public function store(Request $request){
        $titulo = $request->input('titulo');
        $body = $request->body;
        $theme = $request->themes;
        $user_id = \Auth::user()->id;
        $this->validate($request,[
            'titulo'=>'required|unique:posts'
        ]);
        $post = new Post;
        $post->titulo = $titulo;
        $post->post = $body;
        $post->user_id = $user_id;
        $post->theme_id = $theme;
        $post->save();

        return view('posts.index')->with('posts',$post);
    }
}
