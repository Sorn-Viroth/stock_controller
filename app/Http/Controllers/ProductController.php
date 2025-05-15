<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(Request $required){
        $module='product';
        $mainmodule='admin';
        return view('admin.product.product',['module'=>$module, 'mainmodule'=>$mainmodule]);
    }
}
