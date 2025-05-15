<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResivereportController extends Controller
{
    public function resivereport(Request $request){
        $module = 'resive-report';
        $mainmodule = 'admin2';
        return view('admin.resive-report.resive-report',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
