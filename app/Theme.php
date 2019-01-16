<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public function posts(){
        return $this->hasMany('App\Post','theme_id');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    
}
