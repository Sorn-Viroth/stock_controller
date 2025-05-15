<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user(Request $request){
        $module='user';
        $mainmodule = 'user';
        return view('admin.user.user',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
