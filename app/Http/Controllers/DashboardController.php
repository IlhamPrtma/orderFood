<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // $employees = User::latest()->paginate(10);
        // $categories = Category::all();
        return view('admin.dashboard');
        // return view('employee.pages.home', [
        //     'title' => 'Home',
        //     'employees' => $employees,
        //     'categories' => $categories,
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

 
}
