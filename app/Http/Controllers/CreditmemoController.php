<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditmemoController extends Controller
{
    public function creditmemo(Request $request){
        $module = 'creditmemo';
        $mainmodule = 'admin1';
        return view('admin.creditmemo.creditmemo',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
