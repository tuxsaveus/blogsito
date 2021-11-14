<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //Relacion uno a muchos (Inversa)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    //Relacion polimorfica
    public function commentable(){
        return $this->morphTo();
    }
}
