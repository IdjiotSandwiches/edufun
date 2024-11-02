@extends('layout.layout')
@section('title', 'Home')

@section('content')
<img src="{{ asset('/img/banner.jpg') }}" class="img-fluid w-100" alt="" style="height: 30rem; object-fit: cover; object-position: bottom;">
<section class="m-4">
    @foreach ($articles as $article)
        @include('component.card', ['articles' => $articles])
    @endforeach
</section>
@endsection
