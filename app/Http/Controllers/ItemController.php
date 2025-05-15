<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function item(Request $request){
        $module='item';
        $mainmodule='admin';
        return view('admin.item.item',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
