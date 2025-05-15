<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerlistController extends Controller
{
    public function customerlist(Request $request){
        $module = 'customer-list';
        $mainmodule = 'admin1';
        return view('admin.customer-list.customer-list',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
