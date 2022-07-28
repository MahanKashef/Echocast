<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {
        $most_view = DB::table('podcasts')->orderByDesc('view')->limit(6)->get();
        $infos = DB::table('infos')->get()->all();
        return view('Together.index')->with(['most_view'=>$most_view,'infos'=>$infos]);
    }

    public function archive($title)
    {
        $podcast = DB::table('podcasts')->where('title',$title)->get();
        foreach($podcast as $items);
        $items = (array) $items;
        $view = DB::table('podcasts')->where('title',$title)->value('view');
        $view++;
        DB::table('podcasts')->where('title',$title)->update(['view'=>$view]); //increment view
        $guest = DB::table('guests')->where('name',$items['guest_id'])->get();
        $comments = DB::table('comments')->where('podcast_id',$items['id'])->get()->all();// کامنت ها رو براساس ای دی پادکست مرتب کردم و همه رو داخل متغیر کامنتز ریختم
        return view('Together.Archive')->with(['podcast'=>$podcast,'guest'=>$guest,'comments'=>$comments]);
    }

    public function archives()
    {
        $podcasts = DB::table('podcasts')->get()->all();
        $most_view = DB::table('podcasts')->orderByDesc('view')->limit(6)->get();
        return view('Together.archives')->with(['podcasts'=>$podcasts,'most_view'=>$most_view]);
    }

    public function about_us()
    {
        $info = DB::table('infos')->get();
        $devs = DB::table('developers')->get()->all();
        return view('Together.about-us')->with(['info'=>$info,'devs'=>$devs]);
    }

    public function contact_us()
    {
        $info = DB::table('infos')->get();
        return view('Together.contact-us',compact('info',$info));
    }

    public function sign_in()
    {
        return view('Together.Sign-in');
    }

    public function sign_out()
    {
        Auth::logout();
        return redirect('/');
    }
}
