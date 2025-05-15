<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockmovementController extends Controller
{
    public function stockmovement(Request $request){
        $module='stock-movement';
        $mainmodule='admin2';
        return view('admin.stock-movement.stock-movement',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
