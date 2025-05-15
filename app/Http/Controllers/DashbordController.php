<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function dashboard(){
        $module = 'dashboard';
        $mainmodule = 'dashboard';
        return view('admin.dashboard.dashboard',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
