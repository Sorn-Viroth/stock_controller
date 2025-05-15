<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function unit(Request $request){
        $module='unit';
        $mainmodule='admin';
        return view('admin.unit.unit',['module'=>$module,'mainmodule'=>$mainmodule]);
    }
}
