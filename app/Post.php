<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
        'titulo', 'post', 'user_id', 'theme_id',
	];
	protected $table = "posts";
	
    function store(Request $req){
    	$post = new \app\Post;

    	$post->titulo = $req->input('titulo');
    	$post->post = $req->input('post');
    	//$post->tema = $req->input('tema');

    	$post->save();

	}
	public function theme(){
        return $this->belongsTo('App\Theme','theme_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
	}
	public function answers(){
        return $this->hasMany('App\Answer','post_id');
    }
}
