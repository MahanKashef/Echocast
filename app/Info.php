<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'bchome','logo','about','number1','number2','address','gmail','facebook','insta',
        
        'twitter','linkedin','created-at','updated-at'
    ];
}
