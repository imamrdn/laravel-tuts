<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('extra');
    }

    public function show()
    {
        return view('single');
    }
}
