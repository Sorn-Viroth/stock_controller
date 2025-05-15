<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RpissueitemController extends Controller
{
    public function rpissueitem(Request $request){
        $module = 'rp-issueitem';
        $mainmodule = 'admin2';
        return view('admin.rp-issueitem.rp-issueitem',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
