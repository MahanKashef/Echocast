<?php

namespace App\Http\Controllers;

use App\Developer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DeveloperController extends Controller
{
    /**************** index ****************/

    public function index()
    {
        $devs = DB::table('developers')->get()->all();
        return view('Together.admin.developer.index',compact('devs',$devs));
    }

    /**************** create ****************/

    public function create()
    {
        return view('Together.admin.developer.create');
    }

    /**************** store ****************/

    public function store(Request $request)
    {
        $img_name = $request->file('img')->getClientOriginalName();

            //make sure about correct name

        $img_name = str_replace(' ','_',$img_name);

            //save file
        
        $place = '/dev-files/img';  //files place on project

        $request->file('img')->storeAs("public".$place,$img_name);

        Storage::disk('local')->put('file.txt','Contents');

        $img = '/storage'.$place.'/'.$img_name;

        /******* Get detailes from $request and save on database ********/


        $dev = Developer::query()->create([
            'name'      => $request->get('name'),
            'des'       => $request->get('des'),
            'img'       => $img,
            'gmail'     => $request->get('gmail'),
            'facebook'  => $request->get('facebook'),
            'linkedin'  => $request->get('linkedin'),
            'twitter'   => $request->get('twitter'),
            'instagram' => $request->get('instagram')
        ]);

        $dev->save();

        return redirect('/admin/dev/show/'.$dev->id);
    }

    /**************** show ****************/

    public function show($id)
    {
        $dev = DB::table('developers')->where('id',$id)->get();
        return view('Together.admin.developer.show',compact('dev',$dev));
    }

    /**************** edit ****************/

    public function edit($id)
    {   
        $dev = DB::table('developers')->where('id',$id)->get();
        return view('Together.admin.developer.edit',compact('dev',$dev));
    }

    /**************** update ****************/

    public function update($id,Request $request)
    {
        $dev = DB::table('developers')->where('id',$id)->get();
        foreach($dev as $item);
        $item = (array) $item;


        if($request->file())
        {
            $img = $item['img'];
            $place = '/dev-files/img';

            $img = str_replace('/storage','storage',$img);

            if($request->file('img')!=$item['img'])
            {
                unlink($img);

                $img_name = $request->file('img')->getClientOriginalName();

                $request->file('img')->storeAs('public'.$place,$img_name);

                Storage::disk('local')->put('file.txt','Contents');

                $img = '/storage'.$place.'/'.$img_name;

                DB::table('developers')->where('id',$id)->update(['img'=>$img]);
            }

        }

            $dev = Developer::query()->where('id',$id)->update([
                'name'        => $request->get('name'),
                'des'      => $request->get('des'),
                'gmail'        => $request->get('gmail'),
                'facebook'     => $request->get('facebook'),
                'linkedin'     => $request->get('linkedin'),
                'twitter'      => $request->get('twitter'),
                'insta'        => $request->get('insta'),
            ]);


            return redirect('/admin/dev/show/'.$id);
    }

    /**************** Delete ****************/

    public function delete($id)
    {
        $dev = DB::table('developers')->where('id',$id)->get();
        foreach($dev as $item);
            $item->img = str_replace('/storage','storage',$item->img);
            unlink($item->img);
            DB::table('developers')->where('id',$id)->delete();
        return redirect('/admin/dev');
    }
}
