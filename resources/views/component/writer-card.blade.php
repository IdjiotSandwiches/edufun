@props(['writer'])

<a href="{{ route('getWriterArticles', ['writer' => $writer->name]) }}" class="card bg-transparent border-0 text-center text-dark link-underline link-underline-opacity-0" style="width: 18rem;">
    <img src="{{ asset($writer->avatar) }}" class="card-img-top img-fluid mx-auto d-block rounded-circle" alt="...">
    <div class="pt-4">
        <h5 class="card-title fw-semibold">{{ $writer->name }}</h5>
        <p class="card-text">{{ $writer->specialize }}</p>
    </div>
</a>
