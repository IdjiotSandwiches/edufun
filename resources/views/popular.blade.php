@extends('layout.layout')
@section('title', 'Popular')

@section('content')
<section class="m-4">
    <h2 class="fw-semibold pb-5">Popular</h2>
    @foreach ($articles as $article)
        @include('component.card', ['articles' => $articles])
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</section>
@endsection
