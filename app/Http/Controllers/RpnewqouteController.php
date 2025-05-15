<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RpnewqouteController extends Controller
{
    public function newqoute(Request $request){
        $module='rp-newqoute';
        $mainmodule='admin1';
        return view('admin.rp-newqoute.rp-newqoute',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
