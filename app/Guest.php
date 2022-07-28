<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'name','res','story','img','gmail','facebook','insta','twitter','linkedin','created-at','updated-at'
    ];
}
