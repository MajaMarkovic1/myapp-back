<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $intern = 'Maja';
        return view('home', compact('intern'));
    }
}
