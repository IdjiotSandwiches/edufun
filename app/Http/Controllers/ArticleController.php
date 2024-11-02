<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($title)
    {
        $article = Article::with(['writer', 'category'])
            ->where('title', $title)
            ->first();

        return view('article', compact('article'));
    }
}
