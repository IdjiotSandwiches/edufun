@extends('layout.layout')
@section('title', 'Home')

@section('content')
<section class="m-4">
    <h1>{{ $article->category->name }}</h1>
    <img src="{{ $article->image_link }}" alt="" class="img-fluid rounded-4" style="height: 30rem; width: 100%; object-fit: cover; object-position: top;">
    <p class="pt-2">{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }} | by <span>{{ $article->writer->name }}</span></p>
    <p>{{ $article->body }}</p>
</section>
@endsection
