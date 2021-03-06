<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'likes',
        'user_id',
    ];

   /*public function user(){
        return $this->belongsTo(User::class);
    }*/

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function postLikes(){

         return $this->hasMany(PostLikes::class);
    }
}
