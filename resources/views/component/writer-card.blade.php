@props(['imgLink', 'authorName', 'authorDesc'])

<a href="{{ route('getWriterArticles', ['writer' => $authorName]) }}" class="border-0 text-center text-dark link-underline link-underline-opacity-0" style="width: 18rem;">
    <img src="{{ asset($imgLink) }}" class="card-img-top img-fluid mx-auto d-block rounded-circle" alt="...">
    <div class="pt-4">
        <h5 class="">{{ $authorName }}</h5>
        <p class="">{{ $authorDesc }}</p>
    </div>
</a>
