<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            ['title' => 'judul pertama', 'subject' => 'ini isi pertama'],
            ['title' => 'judul kedua', 'subject' => 'ini isi kedua'],
        ];

        return view('article.index', compact('articles '));
    }

    public function show($slug)
    {
        return view('article.single', compact('slug'));
    }
}
