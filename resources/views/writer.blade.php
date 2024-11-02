@extends('layout.layout')
@section('title', 'Writer')

@section('content')
<section class="m-4" style="padding: 6rem 0 6rem 0;">
    <h2 class="fw-semibold pb-5">Our Writers:</h2>
    <div class="row d-flex justify-content-around">
        @foreach ($writers as $writer)
            @include('component/writer-card', [
                'imgLink' => $writer->avatar,
                'authorName' => $writer->name,
                'authorDesc' => $writer->specialize,
            ])
        @endforeach
    </div>
</section>
@endsection
