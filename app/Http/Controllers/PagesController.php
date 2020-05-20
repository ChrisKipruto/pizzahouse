<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    # Home Page
    public function index() {
        
        // return view
        return view('pages.index');

    }

    # About Page
    public function about() {
        
        // return view
        return view('pages.about');

    }

    # Services Page
    public function services() {
        
        // return view
        return view('pages.services');

    }

}
