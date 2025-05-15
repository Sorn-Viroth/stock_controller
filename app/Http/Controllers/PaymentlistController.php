<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentlistController extends Controller
{
   public function paymentlist(Request $request){
    $module='paymentlist';
    $mainmodule='admin';
    return view('admin.paymentlist.paymentlist',['module'=>$module, 'mainmodule'=>$mainmodule]);
   }
}
