<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Writer;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category)
    {
        $category = Category::where('name', $category)->first();

        if (!$category) abort(404);

        $categoryName = $category->name;
        $articles = Article::with(['writer', 'category'])
            ->where('category_id', $category->id)
            ->get();

        return view('category', compact('categoryName', 'articles'));
    }
}
