<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\Cart;
use Session;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart();
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        return redirect('/signin');
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }
    function logout()
    {
        Session::forget('user');
        return redirect('/signin');
    }
    function Cart()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();
        return view('cart', ['products' => $data]);
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cart');
    }
    function ordernow()
    {
        $userId = Session::get('user')['id'];
        $total= DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');
        return view('ordernow', ['total' => $total]);
    }
}
