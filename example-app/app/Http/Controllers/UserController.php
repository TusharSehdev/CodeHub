<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function view()
    {
        return view('signin');

    }
    function signin(Request $request)
    {
        $user= User::where(['email'=>$request->email])->first();

        if(!$user || !Hash::check($request->password,$user->password))
        {
            return "password dont match";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/product');
        }
    }
}
