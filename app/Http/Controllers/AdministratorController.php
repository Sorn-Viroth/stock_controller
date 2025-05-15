<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function administrator(Request $request){
        $module='administrator';
        return view('admin.adminstrator.administrator',['module'=>$module]);
    }
}
