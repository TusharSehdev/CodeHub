<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index(){
        $registers = ::all();
        $data = compact('registers');
        return view('customers')->with($data);
    }
}
