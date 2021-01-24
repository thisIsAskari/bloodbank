<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        return view('index');
    }

    public function request()
    {
        return view('frontend.request');
    }

    public function donate()
    {
        return view('frontend.donate');
    }

    public function aboutus()
    {
        return view('frontend.aboutus');
    }
}
