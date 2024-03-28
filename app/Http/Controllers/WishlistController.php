<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function post($id)
    {
        dd($id);
        Auth::user()->wishlist()->attach($id);
        return back();
    }

    public function remove($id)
    {
        return 'Remove';
    }
}
