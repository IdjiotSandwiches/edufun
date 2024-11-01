<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PopularController extends Controller
{
    public function index()
    {
        $articles = Article::limit(6)->get()->forPage(request('page', 1), 3);
        $articles = new LengthAwarePaginator(
            $articles,
            6, // Total articles
            3, // Articles per page
            request('page', 1),
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('popular', compact('articles'));
    }
}
