<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){

        $data= Product::all();
        return view('product',['products'=>$data]);
    }
}
