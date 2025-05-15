<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    //
    public function doRegister(Request $request){
        $username = $request->username;
        $password = $request->password;
        $email = $request->email;
        $mobile = $request->mobile;
        $user = DB::table('users')->insert([
            [
                'name' => $username,
                'password' => $password,
                'email' => $email,
                'mobile' => $mobile
            ],
        ]);
        if($user){
            return redirect('/register-list');
        }else{
            return "Error";
        }
        // dd('user');
        return view('listdata' ,
        [
        'username' => $username,
         'password' => $password,
         'email' =>$email,
         'mobile' =>$mobile
        ]);

    }
    public function registerlist(Request $request)
    {
        $user = DB::table('users')
            ->select('*')->get();


        return view('register_list',['user'=>$user
    ]);
    }
    public function getDelete(Request $request){
        $user_id = $request->id;
        $user = DB::table('users')->delete($user_id);
        if($user){
            return view('/deletecomple');
        }else{
            return "Error";
        }}
}
?>
