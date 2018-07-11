<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin');
    }

    /**
     * Show the application starter dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function starter()
    {
        return view('layouts.starter');
    }    
}
