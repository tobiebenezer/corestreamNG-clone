<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreStream extends Controller
{
    /**
     * The landing page to Core Stream Ng
     * 
     * @return view home page
     */

    public function index()
    {
        return view('pages.home');
    }

     /**
     * Get information concerning Core Stream Ng
     * 
     * @return view about page
     */

    public function about()
    {
        return view('pages.about');
    }
}
