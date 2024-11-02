@extends('layout.layout')
@section('title', 'Popular')

@section('content')
<section class="m-4">
    <h2 class="fw-semibold pb-5">Popular</h2>
    @include('component.card', ['articles' => $articles])
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</section>
@endsection
