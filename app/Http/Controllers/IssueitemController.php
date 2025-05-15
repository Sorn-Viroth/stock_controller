<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueitemController extends Controller
{
    public function issueitem(Request $request){
        $module = 'issue-item';
        $mainmodule = 'admin2';
        return view('admin.issue-item.issue-item',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
