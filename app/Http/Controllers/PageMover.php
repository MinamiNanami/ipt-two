<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageMover extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function reports()
    {
        return view('reports');
    }

    public function officials()
    {
        return view('officials');
    }

    public function documents()
    {
        return view('documents');
    }

    public function visionmission()
    {
        return view('visionmission');
    }

    public function settings()
    {
        return view('settings');
    }
    
    public function residents()
    {
        return view('residents');
    }
}
