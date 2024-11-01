@props(['imgLink', 'title', 'excerpt', 'createdAt', 'author', 'articleLink'])

<div class="card mb-3 border-0">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="{{ asset($imgLink) }}" class="img-fluid ratio ratio-1x1 rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $title }}</h5>
                <p class="card-text">{{ $createdAt }} | by <span>{{ $author }}</span></p>
                <p class="card-text">{{ $excerpt }}</p>
                <div class="d-flex justify-content-end">
                    <a type="button" href="{{ $articleLink }}" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        </div>
    </div>
</div>
