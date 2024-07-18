<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard view.
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}