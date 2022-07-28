<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{

    /**************** Index ****************/

    public function index()
    {
        $infos = DB::table('infos')->get()->all();
        $menus = DB::table('menus')->get()->all();
        return view('Together.admin.info.index')->with(['infos'=>$infos,'menus'=>$menus]);
    }

    /**************** Create ****************/

    public function create(){
        return view('Together.admin.info.create');
    }

    /**************** Store ****************/


    public function store(Request $request)
    {
        $bc_name = $request->file('bc')->getClientOriginalName();
        $logo_name = $request->file('logo')->getClientOriginalName();

            //make sure about correct name

        $bc_name = str_replace(' ','_',$bc_name);
        $logo_name = str_replace(' ','_',$logo_name);

            //save file
        
        $place = '/info-files/img';  //files place on project

        $request->file('bc')->storeAs("public".$place,$bc_name);
        $request->file('logo')->storeAs("public".$place,$logo_name);

        Storage::disk('local')->put('file.txt','Contents');

        $bc   = '/storage'.$place.'/'.$bc_name;
        $logo = '/storage'.$place.'/'.$logo_name;

        /******* Get detailes from $request and save on database ********/


        $info = Info::query()->create([

            'bchome'    => $bc,
            'logo'      => $logo,
            'number1'   => $request->get('num1'),
            'number2'   => $request->get('num2'),
            'address'   => $request->get('address'),
            'about'     => $request->get('about'),
            'gmail'     => $request->get('gmail'),
            'facebook'  => $request->get('facebook'),
            'linkedin'  => $request->get('linkedin'),
            'twitter'   => $request->get('twitter'),
            'instagram' => $request->get('instagram')
        ]);

        $info->save();

        return redirect('/admin/info');

    }

    /**************** Edit ****************/

    public function edit($id)
    {
        $info = DB::table('infos')->where('id',$id)->get();
        return view('Together.admin.info.edit',compact('info',$info));
    }

    /**************** Update ****************/

    public function update($id,Request $request)
    {
        $info = DB::table('infos')->where('id',$id)->get();
        foreach($info as $item);
        $item = (array) $item;


        if($request->file())
        {
            $bc = $item['bchome'];
            $logo = $item['logo'];
            $place = '/info-files/img';

            $bc = str_replace('/storage','storage',$bc);
            $logo = str_replace('/storage','storage',$logo);

            if($request->file('bc')!=$item['bchome'] and $request->file('bc')!=null)
            {
                unlink($bc);

                $bc_name = $request->file('bc')->getClientOriginalName();

                $request->file('bc')->storeAs('public'.$place,$bc_name);

                Storage::disk('local')->put('file.txt','Contents');

                $bc = '/storage'.$place.'/'.$bc_name;

                DB::table('infos')->where('id',$id)->update(['bchome'=>$bc]);
            }

            if($request->file('logo')!=$item['logo'] and $request->file('logo')!=null)
            {
                
                unlink($logo);

                $logo_name = $request->file('logo')->getClientOriginalName();

                $request->file('logo')->storeAs('public'.$place,$logo_name);

                Storage::disk('local')->put('file.txt','Contents');

                $logo = '/storage'.$place.'/'.$logo_name;

                DB::table('infos')->where('id',$id)->update(['logo'=>$logo]);
            }

        }

            $info = Info::query()->where('id',$id)->update([
                'about'        => $request->get('about'),
                'number1'      => $request->get('num1'),
                'number2'      => $request->get('num2'),
                'address'      => $request->get('address'),
                'gmail'        => $request->get('gmail'),
                'facebook'     => $request->get('facebook'),
                'linkedin'     => $request->get('linkedin'),
                'twitter'      => $request->get('twitter'),
                'insta'        => $request->get('insta'),
            ]);


            return redirect('/admin/info');
        
    }

    /**************** Delete ****************/

    public function delete($id)
    {
        $info = DB::table('infos')->where('id',$id)->get();
        foreach($info as $item);
            $item->bchome = str_replace('/storage','storage',$item->bchome);
            unlink($item->bchome);
            $item->logo = str_replace('/storage','storage',$item->logo);
            unlink($item->logo);
            DB::table('infos')->where('id',$id)->delete();
        return redirect('/admin/info');
    }

}
