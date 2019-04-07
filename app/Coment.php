<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    //
    protected $fillable =[
        'body',
        'url',
        'commentable_id',
        'commentable_type',
        'user_id',
    ];
}
