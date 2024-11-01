@extends('layout.layout')
@section('title', 'Category')

@section('content')
<section class="m-4">
    <h2 class="fw-semibold pb-5">{{ $categoryName }}</h2>
    @include('component.card', ['articles' => $articles])
</section>
@endsection
