<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    // Home
    public function home()
    {
        $products = Product::with('category', 'colors')->orderBy('created_at', 'desc')->get();
        return view('pages.home', ['products' => $products]);
    }

    // Cart
    public function cart()
    {
        return view('pages.cart');
    }

    // Wishlist
    public function wishlist()
    {
        $products = Auth::user()->wishlist;
        return view('pages.wishlist', ['products' => $products]);
    }

    // Account
    public function account()
    {
        return view('pages.account');
    }

    // Checkout
    public function checkout()
    {
        return view('pages.checkout');
    }

     // Product
     public function product($id)
     {
        $product = Product::with('category', 'colors')->findOrFail($id);
         return view('pages.product', ['product' => $product]);
     }

     public function success()
     {
        return 'success';
     }
}
