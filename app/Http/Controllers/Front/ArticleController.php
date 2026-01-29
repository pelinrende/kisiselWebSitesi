<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('front.articles.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('front.articles.show', compact('article'));
    }
public function DeleteArticle($id)
{
    $article = \App\Models\Article::findOrFail($id); //
    $article->delete();
    return redirect()->back()->with('success', 'Makale başarıyla silindi! 🚀');
}
}
