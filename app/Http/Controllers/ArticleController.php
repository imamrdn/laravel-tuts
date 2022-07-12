<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::simplePaginate(5);
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        return view('article.single', compact('slug'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        dd($request);

        // return view('article.create');
    }
}
