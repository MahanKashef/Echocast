<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        // Users
        $usersCount = DB::table('users')->count();
        $adminCount = DB::table('users')->where('permission','admin')->count();
        $userCount  = $usersCount - $adminCount ;

        // Comments
        $lastComments = DB::table('comments')->orderByDesc('id')->limit(6)->get();
        $commentsCount = DB::table('comments')->count();
        $unseenCount  = DB::table('comments')->where('seen','0')->count();
        $approvedCount= DB::table('comments')->where('status','approved')->count();

        // Podcasts
        $podcastsCount = DB::table('podcasts')->count();
        $podcastsView = DB::table('podcasts')->sum('view');
        $most_viewed = DB::table('podcasts')->orderByDesc('view')->limit(6)->get();
        $most_commented = DB::table('podcasts')->orderByDesc('commentCount')->limit(6)->get();


        // Guests
        $guestCount = DB::table('guests')->count();

        return view('Together.admin.dashboard.index')->with([
         // Users   
        'usersCount'=>$usersCount ,
        'adminCount'=>$adminCount , 

        // Comments
        'lastComments'  => $lastComments  ,
        'commentsCount' => $commentsCount , 
        'unseenCount'   => $unseenCount ,
        'approvedCount' => $approvedCount ,

        //Podcasts
        'podcastsCount'   => $podcastsCount , 
        'podcastsView'    => $podcastsView ,
        'most_viewed'     => $most_viewed ,
        'most_commented'  => $most_commented ,

        //Guests
        'guestCount'=>$guestCount
        ]);
    }
}
