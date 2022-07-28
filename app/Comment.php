<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id','podcast_id','comment','status','seen','created-at','updated-at'
    ];
}
