<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function layout()
    {
        return view('admin.layout');
    }
    public function order()
    {
        return view('admin.pages.order.order');
    }
    public function home()
    {
        return view('admin.dashboard');
    }
    public function menu()
    {
        return view('admin.pages.menu.menu');
    }
}
