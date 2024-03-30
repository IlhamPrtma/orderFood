<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function order()
    {
        return view('admin.pages.order.order');
    }

    public function menu()
    {
        return view('admin.pages.menu.menu');
    }
}
