<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->simplePaginate(5);
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->first();
        
        if($article == null) 
        abort(404);

        return view('article.single', compact('article'));
    }

    public function create()
    {
        return view('article.create');
    }

    public function store(Request $request)
    {
        // dd($request->thumbnail);

        $request->validate([
            'thumbnail' => 'mimes:png,jpg,svg,gif,jpeg',
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:10',
        ]);

        $imgName = null;

        if ($request->thumbnail) {
            
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
            
            $request->thumbnail->move(public_path('image'), $imgName);
        }

        Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title, '-'),
            'subject' => $request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect('/article');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:10',
        ]);

        $imgName = null;

        if ($request->thumbnail) {
            
            $imgName = $request->thumbnail->getClientOriginalName() . '-' . time() . '.' . $request->thumbnail->extension();
            
            $request->thumbnail->move(public_path('image'), $imgName);
        }

        Article::find($id)->update([
            'title' => $request->title,
            'subject' => $request->subject,
            'thumbnail' => $imgName
        ]);

        return redirect('/article');
    }

    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/article');
    }
}
