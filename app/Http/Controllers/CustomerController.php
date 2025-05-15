<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer(Request $request){
        $module='customer';
        $mainmodule='admin';
        return view('admin.customer.customer',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
