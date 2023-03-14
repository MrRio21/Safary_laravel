<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('aboutUs.aboutUs');
    }
}
