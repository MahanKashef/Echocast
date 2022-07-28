<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    public function index(){

        $posts = DB::table('posts')->get(); 

        // dd($posts);

         return view('db')->with(['posts'=>$posts]);
    }

    public function show($slug){


        $post = Post::where('slug', $slug)
        ->firstorfail();
            

        return view('show')->with(['slug'=>$slug , 'post'=>$post]);

    }
}
