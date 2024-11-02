@extends('layout.layout')
@section('title', 'Home')

@section('content')
<section class="m-4">
    <h2 class="fw-semibold">{{ $article->category->name }}</h2>
    <img src="{{ $article->image_link }}" alt="" class="img-fluid rounded-4 w-100" style="">
    <p class="pt-2">{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }} | by <span>{{ $article->writer->name }}</span></p>
    {!! $article->body !!}
</section>
@endsection
