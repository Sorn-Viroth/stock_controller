<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerbalanceController extends Controller
{
    public function customerbalance(Request $request){
        $module = 'customer-balance';
        $mainmodule = 'admin1';
        return view('admin.customer-balance.customer-balance',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
