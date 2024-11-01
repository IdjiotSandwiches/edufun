@extends('layout.layout')
@section('title', 'Home')

@section('content')
<img src="{{ asset('/img/banner.jpg') }}" class="img-fluid" alt="" style="height: 20%; object-fit: cover;">
<section class="m-4">
    @include('component.card', ['articles' => $articles])
</section>
@endsection
