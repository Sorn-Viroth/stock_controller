<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChageitemController extends Controller
{
    public function chageitem(Request $request){
        $module = 'chageitem';
        $mainmodule = 'admin';
        return view('admin.chageitem.chageitem',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
