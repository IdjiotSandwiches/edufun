@props(['imgLink', 'authorName', 'authorDesc'])

<a href="{{ route('getWriterArticles', ['writer' => $authorName]) }}" class="card border-0 text-center" style="width: 18rem;">
    <img src="{{ asset($imgLink) }}" class="card-img-top img-fluid mx-auto d-block rounded-circle" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{ $authorName }}</h5>
        <p class="card-text">{{ $authorDesc }}</p>
    </div>
</a>
