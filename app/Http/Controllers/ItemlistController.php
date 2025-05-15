<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemlistController extends Controller
{
    public function itemlist(Request $request){
        $module='item-list';
        $mainmodule='admin2';
        return view('admin.item-list.item-list',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
