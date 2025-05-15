<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResiveitemController extends Controller
{
    public function resiveitem(Request $request){
        $module = 'resive-item';
        $mainmodule = 'admin2';
        return view('admin.resive-item.resive-item',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
