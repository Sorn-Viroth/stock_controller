<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdjustmentitemController extends Controller
{
    public function adjustmentitem(Request $request){
        $module='adjustment-item';
        $mainmodule='admin2';
        return view('admin.adjustment-item.adjustment-item',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
