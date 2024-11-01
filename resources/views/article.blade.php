@extends('layout.layout')
@section('title', 'Home')

@section('content')
<section>
    <h1>{{ $article->category->name }}</h1>
    <img src="{{ $article->image_link }}" alt="">
    <p>{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }} | by <span>{{ $article->writer->name }}</span></p>
    <p>{{ $article->body }}</p>
</section>
@endsection
