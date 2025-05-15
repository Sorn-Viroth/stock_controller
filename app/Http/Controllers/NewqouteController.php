<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewqouteController extends Controller
{
    public function newqoute(Request $request){
        $module='newqoute';
        $mainmodule='admin1';
        return view('admin.newqoute.newqoute',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
