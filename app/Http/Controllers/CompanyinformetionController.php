<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyinformetionController extends Controller
{
    public function companyinformetion(Request $request){
        $module = 'company';
        $mainmodule = 'admin';
        return view('admin.companyinformetion.companyinformetion',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
