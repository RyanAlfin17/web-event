<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function detail()
    {
        return view('home.detail');
    }
}
