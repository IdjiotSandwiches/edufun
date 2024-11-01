@extends('layout.layout')
@section('title', 'Writer')

@section('content')
<section>
    <h1>Our Writers:</h1>
    <div class="row">
        @foreach ($writers as $writer)
            @include('component/writer-card', [
                'imgLink' => '/img/img-1.jpg',
                'authorName' => $writer->name,
                'authorDesc' => $writer->specialize,
            ])
        @endforeach
    </div>
</section>
@endsection
