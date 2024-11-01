@extends('layout.layout')
@section('title', 'Popular')

@section('content')
<section>
    <h1>Popular</h1>
    @foreach ($articles as $article)
        @include('component.card', [
            'imgLink' => $article->imageLink,
            'title' => $article->title,
            'desc' => $article->desc,
            'createdAt' => $article->createdAt,
            'author' => $article->writerName,
            'articleLink' => '/'
        ])
    @endforeach
    {{ $articles->links() }}
</section>
@endsection
