<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceivepaymentController extends Controller
{
    public function receivepayment(Request $request){
        $module = 'receivepayment';
        $mainmodule = 'admin1';
        return view('admin.receivepayment.receivepayment',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
