<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Writer;
use App\Models\Article;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();

        return view('writer', compact('writers'));
    }

    public function getWriterArticles($writer)
    {
        $writer = Writer::where('name', $writer)->first();

        if (!$writer) abort(404);

        $articles = Article::with(['writer', 'category'])
            ->where('writer_id', $writer->id)
            ->get();

        return view('writer-articles', compact('writer', 'articles'));
    }
}
