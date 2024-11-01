<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($slug)
    {
        $article = Article::with(['writer', 'category'])
            ->where('slug', $slug)
            ->first();

        return view('article', compact('article'));
    }
}
