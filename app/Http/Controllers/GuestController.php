<?php

namespace App\Http\Controllers;

use App\Guest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    /**************** Index ****************/

    public function index()
    {
        $guests = DB::table('guests')->get()->all();
        return view('Together.admin.guests.index',compact('guests',$guests));
    }

    /**************** create ****************/

    public function create()
    {   
        return view('Together.admin.guests.create');
    }

    /**************** store ****************/

    public function store(Request $request)
    {

        if($request->file('image')==null)
        {
            echo "Please enter image !!!";
            exit();
        }
        else{
            $image_name = $request->file('image')->getClientOriginalName();

            $image_name = str_replace(' ','_',$image_name);

            $place = '/guest-files/img';
    
            $request->file('image')->storeAs('public'.$place,$image_name);
    
            Storage::disk('local')->put('file.txt','Contents');

            $image = '/storage'.$place.'/'.$image_name;

            $guest =  Guest::query()->create([
                'name'      => $request->get('name'),
                'img'       => $image,
                'res'       => $request->get('res'),
                'story'     => $request->get('story'),
                'gmail'     => $request->get('gmail'),
                'facebook'     => $request->get('facebook'),
                'linkedin'     => $request->get('linkedin'),
                'twitter'      => $request->get('twitter'),
                'insta'        => $request->get('insta')
            ]);
        
            $guest->save();

            return redirect('/admin/guest/show/'.$request->get('name'));
        }   
    }

    /**************** show ****************/

    public function show($name)
    {
        $guest = DB::table('guests')->where('name',$name)->get();

        return view('Together.admin.guests.show',compact('guest',$guest));
    }

    /**************** Edit ****************/

    public function edit($id)
    {
        $guest = DB::table('guests')->where('id',$id)->get();
        return view('Together.admin.guests.edit',compact('guest',$guest));
    }

    /**************** Update ****************/

    public function update($id,Request $request)
    {
        $guest = DB::table('guests')->where('id',$id)->get();
        foreach($guest as $items);
        if($request->file())
        {

            $image = str_replace('/storage','storage',$items->img);

            unlink($image);

            $image_name = $request->file('image')->getClientOriginalName();

            $image_name = str_replace(' ','_',$image_name);

            $place = '/guest-files/img';
    
            $request->file('image')->storeAs('public'.$place,$image_name);
    
            Storage::disk('local')->put('file.txt','Contents');

            $image = '/storage'.$place.'/'.$image_name;

            DB::table('guests')->where('id',$id)->update(['img'=>$image]);
        }

        $guest =  Guest::query()->where('id',$id)->update([
            'name'      => $request->get('name'),
            'res'       => $request->get('res'),
            'story'     => $request->get('story'),
            'gmail'     => $request->get('gmail'),
            'facebook'     => $request->get('facebook'),
            'linkedin'     => $request->get('linkedin'),
            'twitter'      => $request->get('twitter'),
            'insta'        => $request->get('insta')
        ]);

        return redirect('/admin/guest/show/'.$request->get('name'));
    }

    /**************** Delete ****************/

    public function delete($id)
    {
        $guest = DB::table('guests')->where('id',$id)->get();
        foreach($guest as $item);
        $item->img = public_path($item->img);
        $item->img = str_replace('public\/storage','/storage/app/public',$item->img);
        if(file_exists($item->img))
        {
            unlink($item->img);
        }
        DB::table('guests')->where('id',$id)->delete();
        return redirect('/admin/guest');
    }
}

