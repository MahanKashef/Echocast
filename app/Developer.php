<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'name','des','img','gmail','facebook','insta','twitter','linkedin','created-at','updated-at'
    ];
}
