<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdjustmentcostController extends Controller
{
    public function adjustmentcost(Request $request){
        $module='adjustment-cost';
        $mainmodule='admin2';
        return view('admin.adjustment-cost.adjustment-cost',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
