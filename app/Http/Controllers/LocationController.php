<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location(Request $request){
        $module='location';
        $mainmodule='admin';
        return view('admin.location.location',['module'=>$module,'mainmodule'=>$mainmodule]);
    }
}
