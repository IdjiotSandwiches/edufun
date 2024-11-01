@extends('layout.layout')
@section('title', 'Home')

@section('content')
<img src="{{ asset('/img/img-1.jpg') }}" class="img-fluid" alt="">
<section class="">
    @foreach ($articles as $article)
        @include('component.card', [
            'imgLink' => $article->image_link,
            'title' => $article->title,
            'excerpt' => $article->excerpt,
            'createdAt' => \Carbon\Carbon::parse($article->created_at)->format('d M Y'),
            'author' => $article->writer->name,
            'articleLink' => route('getArticle', ['article' => $article->slug]),
        ])
    @endforeach
</section>
@endsection
