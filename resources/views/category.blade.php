@extends('layout.layout')
@section('title', 'Category')

@section('content')
<section>
    <h1>{{ $categoryName }}</h1>
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
