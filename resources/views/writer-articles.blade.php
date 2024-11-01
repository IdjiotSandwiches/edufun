@extends('layout.layout')
@section('title', 'Writer')

@section('content')
<section>
    <div class="card mb-3 border-0">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset($writer->avatar) }}" class="img-fluid ratio ratio-1x1 rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $writer->name }}</h5>
                    <p class="card-text">{{ $writer->specialize }}</p>
                </div>
            </div>
        </div>
    </div>

    @foreach ($articles as $article)
        @include('component.card', [
            'imgLink' => $article->image_link,
            'title' => $article->title,
            'excerpt' => $article->excerpt,
            'createdAt' => \Carbon\Carbon::parse($article->created_at)->format('d M Y'),
            'author' => $article->writer->name,
            'articleLink' => '/'
        ])
    @endforeach
</section>
@endsection
