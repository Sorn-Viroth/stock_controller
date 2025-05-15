<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendor(Request $request){
        $module='vendor';
        $mainmodule='admin';
        return view('admin.vendor.vendor',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
