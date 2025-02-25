<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageMover extends Controller
{
    public function home()
    {
        return view('hometwo');
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

    public function officialstwo()
    {
        return view('officialstwo');
    }

    public function documentstwo()
    {
        return view('documentstwo');
    }
    public function test()
    {
        return view('test');
    }

    public function test2()
    {
        return view('test2');
    }

    public function visionmission()
    {
        return view('visionmission');
    }
}
