<?php

namespace App\Http\Controllers;

use App\Models\Writer;
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
        $writer = Writer::with(['category', 'article'])->where('name', $writer)
            ->first();

        if (!$writer) abort(404);

        return view('writer-articles', compact('writer'));
    }
}
