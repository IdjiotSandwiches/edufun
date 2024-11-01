@extends('layout.layout')
@section('title', 'Category')

@section('content')
<section class="m-4">
    <h1>{{ $categoryName }}</h1>
    @include('component.card', ['articles' => $articles])
</section>
@endsection
