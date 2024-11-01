@extends('layout.layout')
@section('title', 'Writer')

@section('content')
<section class="m-4">
    <div class="mb-3 border-0">
        <div class="d-flex gap-5 align-items-center">
            <div class="">
                <img src="{{ asset($writer->avatar) }}" class="img-fluid shadow ratio ratio-1x1 rounded-circle" alt="..." style="width: 6rem;">
            </div>
            <div class="">
                <div class="">
                    <h5 class="">{{ $writer->name }}</h5>
                    <p class="">{{ $writer->specialize }}</p>
                </div>
            </div>
        </div>
    </div>

    @include('component.card', ['articles' => $articles])
</section>
@endsection
