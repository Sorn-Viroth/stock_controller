<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(Request $request){
        $module = 'company';
        $mainmodule = 'admin';
        return view('admin.company.company',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
