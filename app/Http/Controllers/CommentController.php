<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Mockery\Generator\StringManipulation\Pass\Pass;

class CommentController extends Controller
{
    public function index()
    {
        $comments = DB::table('comments')->get()->all();
        return view('Together.admin.comments.index',compact('comments',$comments));
    }

    public function show($id)
    {
        $comment = DB::table('comments')->where('id',$id)->get();
        return view('Together.admin.comments.show',compact('comment',$comment));
    }

    public function store($id,Request $request)
    {

        $podcast = DB::table('podcasts')->where('id',$id)->get();

        foreach($podcast as $items);
        $user_id =  Auth::id();
        
        if ($user_id == null)
        {
            return redirect('/Archive/'.$items->title);
        }

        $comment = Comment::query()->create([
            'user_id'    => $user_id,
            'podcast_id' => $id,
            'comment'    => $request->get('comment'),
        ]);
        $comment->save();
        return redirect('/Archive/'.$items->title);
    }

    public function status($id)
    {
        $comment = DB::table('comments')->where('id',$id)->get();
        foreach($comment as $item);
        if($item->status=='approved')
        {
            DB::table('comments')->where('id',$id)->update(['status'=>'not_approved']);
            $commentCount = DB::table('podcasts')->where('id',$item->podcast_id)->value('commentCount');
            $commentCount--;
            DB::table('podcasts')->where('id',$item->podcast_id)->update(['commentCount'=>$commentCount]);
            return redirect('/admin/comment');
        }
        else
        {
            DB::table('comments')->where('id',$id)->update(['status'=>'approved']);
            $commentCount = DB::table('podcasts')->where('id',$item->podcast_id)->value('commentCount');
            $commentCount++;
            DB::table('podcasts')->where('id',$item->podcast_id)->update(['commentCount'=>$commentCount]);
            return redirect('/admin/comment');
        }
    }

    public function delete($id)
    {
        DB::table('comments')->where('id',$id)->delete();
        return redirect('/admin/comment');
    }
}
