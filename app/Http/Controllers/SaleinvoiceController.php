<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleinvoiceController extends Controller
{
    public function saleinvoice(Request $request){
        $module='saleinvoice';
        $mainmodule='admin1';
        return view('admin.saleinvoice.saleinvoice',['module'=>$module,'mainmodule'=>$mainmodule]);
    }
}
