<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request){
        $module='payment';
        $mainmodule='admin';
        return view('admin.payment.payment',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
