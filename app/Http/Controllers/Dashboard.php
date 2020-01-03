<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $title = "Dashboard";
        return view('home', compact('title'));
    }
}
