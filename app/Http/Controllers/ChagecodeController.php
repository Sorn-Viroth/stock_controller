<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChagecodeController extends Controller
{
    public function chagecode(Request $request){
        $module = 'chagecode';
        $mainmodule = 'admin';
        return view('admin.chagecode.chagecode',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
