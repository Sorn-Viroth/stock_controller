<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorlistController extends Controller
{
    public function vendorlist(Request $request){
        $module = 'vendor-list';
        $mainmodule = 'admin2';
        return view('admin.vendor-list.vendor-list',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
