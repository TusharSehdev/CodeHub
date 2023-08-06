<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegisterModel;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        echo"<pre>";
        print_r($request->all());
        $register = new register;
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->password = md5($request['password']);
        $register->save();
        return redirect('/SignIn');
    }
    public function customers(){
        $registers = register::all();
        $data = compact('registers');
        return view('customers')->with($data);
    }
}
