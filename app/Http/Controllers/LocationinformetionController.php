<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationinformetionController extends Controller
{
    public function locationinformetion(Request $request){
        $module='location';
        $mainmodule='admin';
        return view('admin.locationinformetion.locationinformetion',['module'=>$module,'mainmodule'=>$mainmodule]);
    }
}
