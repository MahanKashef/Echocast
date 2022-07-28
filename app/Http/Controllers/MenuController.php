<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{

    public function create()
    {
        return view('Together.admin.menus.create');
    }

    public function store(Request $request)
    {
        $menu = Menu::query()->create(
            [
                'menu'      =>  $request->get('menu'),
            ]
            );
        return redirect('/admin/info');
    }

    public function edit($id)
    {
        $menu = DB::table('menus')->where('id',$id)->get();
        return view('Together.admin.menus.edit',compact('menu',$menu));
    }

    public function Update($id,Request $request)
    {
        DB::table('menus')->where('id',$id)->update(['menu'=>$request->get('menu')]);
        return redirect('/admin/info');
    }

    public function delete($id)
    {
        DB::table('menus')->where('id',$id)->delete();
        return redirect('/admin/info');
    }
}
