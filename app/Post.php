<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillale = ['title', 'body'];


        public function users()
       {
        return $this->belongsTo('App\User');
       }
}
