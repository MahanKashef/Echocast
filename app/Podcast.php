<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podcast extends Model
{
    protected $fillable = [
        'title','menu_id','PFP','NOP','AFP','NOA','summary','guest_id','view','commentCount','created_at','updated_at'
    ];

    // تابع پایین کمک میکنه که بر اساس هر فیلدی که برگشت میدیم عملیات 
    //رو انجام بدیم  route model binding

    // public function getRouteKeyName()
    // {
    //     return 'username';
    // }

}
