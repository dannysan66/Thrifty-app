<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Dashboard

    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }
}
