@extends('layout.layout')
@section('title', 'Category')

@section('content')
<section class="m-4">
    <h2 class="fw-semibold pb-5">{{ $category->name }}</h2>
    @include('component.card', ['articles' => $category->article])
</section>
@endsection
