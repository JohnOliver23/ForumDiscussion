<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    function store(Request $req){
    	$post = new \app\Post;

    	$post->titulo = $req->input('titulo');
    	$post->post = $req->input('post');
    	//$post->tema = $req->input('tema');

    	$post->save();

    }
}
