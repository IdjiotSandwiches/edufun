@props(['imgLink', 'authorName', 'authorDesc'])

<a href="{{ route('getWriterArticles', ['writer' => $authorName]) }}" class="card bg-transparent border-0 text-center text-dark link-underline link-underline-opacity-0" style="width: 18rem;">
    <img src="{{ asset($imgLink) }}" class="card-img-top img-fluid mx-auto d-block rounded-circle" alt="...">
    <div class="pt-4">
        <h5 class="card-title fw-semibold">{{ $authorName }}</h5>
        <p class="card-text">{{ $authorDesc }}</p>
    </div>
</a>
