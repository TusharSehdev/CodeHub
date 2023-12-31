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
        echo '<pre>';
        print_r($request->all());
        $register = new RegisterModel();
        $register->name = $request['name'];
        $register->email = $request['email'];
        $register->password = md5($request['password']);
        $register->save();
        return redirect('/register');
    }
    public function customers()
    {
        $registers = RegisterModel::all();
        $data = compact('registers');
        return view('customers')->with($data);
    }
    public function delete($id)
    {
        $registers = RegisterModel::find($id);
        if (!is_null($registers)) {
            $registers->delete();
        }
        return redirect('register');
    }
    public function edit($id){
        $registers = RegisterModel::find($id);
        if (is_null($registers)){
            return redirect('customers');

        }else{
            $data = compact('registers');
            return view('register')->with($data);
        }
    }
}
