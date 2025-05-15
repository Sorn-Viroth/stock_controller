<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceregisterController extends Controller
{
    public function invoiceregister(Request $request){
        $module = 'invoice-register';
        $mainmodule = 'admin1';
        return view('admin.invoice-register.invoice-register',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
