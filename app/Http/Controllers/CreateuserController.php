<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateuserController extends Controller
{
    //
    public function createuser(Request $request){
        $module = 'createuser';
        $mainmodule = 'admin';
        return view('admin.createuser.createuser',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
