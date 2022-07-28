<?php

namespace App\Http\Controllers;

use App\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Block\Element\Document;

class PodcastController extends Controller
{

    // ما میتونیم هر مقداری رو که از طریق روت به صفحه کنترولر ارسال میشه رو توسط آرگومان بگیریم و ازش استفاده کنیم

    /**************** Index ****************/

    public function index(){
        $podcasts = DB::table('podcasts')->get()->all();
        return view('Together.admin.podcasts.index',compact('podcasts',$podcasts));

    }

    /**************** Create ****************/

    public function create()
    {
        $guests = DB::table('guests')->get()->all();
        $menus  = DB::table('menus')->get()->all();
        return view('Together.admin.podcasts.create')->with(['guests'=>$guests , 'menus'=>$menus]);
    }

    /**************** Store ****************/

    public function store(Request $request)
    {
        /******* Get name and Put address ********/


        $Audio_name = $request->file('AFP')->getClientOriginalName();
        $Picture_name = $request->file('PFP')->getClientOriginalName();
        $music_file = $request->file('AFP');

        //make sure about correct name

        $Audio_name = str_replace(' ','_',$Audio_name);
        $Picture_name = str_replace(' ','_',$Picture_name);
        
        
        $AFP = '/podcast-files/audio';
        $PFP = '/podcast-files/img';

        /******* Save on folder ********/


        $request->file('AFP')->storeAs("public".$AFP,$Audio_name);
        $request->file('PFP')->storeAs("public".$PFP,$Picture_name);

        Storage::disk('local')->put('file.txt', 'Contents');

        $PFP = "/storage".$PFP."/".$Picture_name;
        $AFP = "/storage".$AFP."/".$Audio_name;


        /******* Get detailes from $request and save on database ********/
        $podcast = Podcast::query()->create([
            'title'    => $request->get('title'),
            'menu_id'  => $request->get('menu_id'),
            'PFP'      => $PFP,
            'NOP'      => $Picture_name,
            'AFP'      => $AFP,
            'NOA'      => $Audio_name,
            'summary'  => $request->get('summary'),
            'guest_id' => $request->get('guest_id'),
            'view'     => 0
        ]);     

        $podcast->save();

        return redirect('/admin/podcast/show/'.$podcast->title);
    }

    /**************** Show ****************/
    
    public function show($title)
    {
        $podcast = DB::table('podcasts')->where('title',$title)->get();

        return view('Together.admin.podcasts.show',compact('podcast',$podcast));
    }

    /**************** Edit ****************/

    public function edit($id)
    {
        $podcast = DB::table('podcasts')->where('id',$id)->get();
        return view('Together.admin.podcasts.edit',compact('podcast',$podcast));
    }

    /**************** Update ****************/

    public function update($id,Request $request)
    {
        $podcast = DB::table('podcasts')->where('id',$id)->get();

        foreach($podcast as $items);
        $items = (array) $items;


        /******* checking for file exist ******/

        if($request->file()){

            // $request->validate([
            //     'AFP' => 'mimes:jpeg,png,bmp',
            //     'PFP' => 'mimes:mp3,wav,ogg',
            // ]);


            /******* Get name and Put address ********/

            if($request->file('AFP')){
                $Audio_name = $request->file('AFP')->getClientOriginalName();

                //make sure about correct name
                $Audio_name = str_replace(' ','_',$Audio_name);

                if($items['NOA'] != $Audio_name)
                {
                    //unlink past audio
                    DB::table('podcasts')->where('id',$id)->update(['NOA' => $Audio_name]);

                    //correct file path for unlink     

                    $items['AFP'] = str_replace('/storage','storage',$items['AFP']);

                    unlink($items['AFP']);

                    /**** save new file  ****/

                    $AFP = '/podcast-files/audio';
                    $request->file('AFP')->storeAs("public".$AFP,$Audio_name);
                    $AFP = "/storage".$AFP."/".$Audio_name;
                    DB::table('podcasts')->where('id',$id)->update(['AFP'=>$AFP]);
                    Storage::disk('local')->put('file.txt', 'Contents');

                }

                }
                
                
                if($request->file('PFP')){
                    $Picture_name = $request->file('PFP')->getClientOriginalName();

                //make sure about correct name
                $Picture_name = str_replace(' ','_',$Picture_name);

                if($items['NOP'] != $Picture_name) {

                    //unlink past picture

                    DB::table('podcasts')->where('id',$id)->update(['NOP' => $Picture_name]);

                    //correct file path for unlink     

                    $items['PFP'] = str_replace('/storage','storage',$items['PFP']);

                    unlink($items['PFP']);

                    /**** save new file  ****/
                    $PFP = '/podcast-files/img';
                    $request->file('PFP')->storeAs("public".$PFP,$Picture_name);
                    $PFP = "/storage".$PFP."/".$Picture_name;
                    DB::table('podcasts')->where('id',$id)->update(['PFP'=>$PFP]);
                    Storage::disk('local')->put('file.txt','Contents');

                    }

                }

        }

                $update = Podcast::query()->where('id',$id)->update([
                    'title'    => $request->get('title'),
                    'menu_id'  => $request->get('menu_id'),
                    'card_id'  => $request->get('card_id'),
                    'summary'  => $request->get('summary'),
                ]);

               return redirect('/admin/podcast/show/'.$request['title']);
        }


    /**************** Delete ****************/

        public function delete($id)
        {
            $podcast = DB::table('podcasts')->where('id',$id)->get();
            foreach($podcast as $item);
            $item->PFP = str_replace('/storage','storage',$item->PFP);
            unlink($item->PFP);
            $item->AFP = str_replace('/storage','storage',$item->AFP);
            unlink($item->AFP);
            DB::table('podcasts')->where('id',$id)->delete();
            return redirect('/admin/podcast');
        }


    }


