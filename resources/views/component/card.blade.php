@props(['articles'])

<div class="card mb-3 border-0 bg-transparent">
    <div class="row g-0">
        <div class="col-md-5">
            <img src="{{ asset($article->image_link) }}" class="img-fluid ratio ratio-1x1 rounded-4" alt="..." style="height: 20rem; object-fit: cover;">
        </div>
        <div class="col-md-7">
            <div class="card-body">
                <h5 class="card-title fw-semibold">{{ $article->title }}</h5>
                <p class="card-text">{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }} | by <span>{{ $article->writer->name }}</span></p>
                {!! Str::limit($article->body, 200, '...') !!}
                <div class="d-flex justify-content-end">
                    <a type="button" href="{{ route('getArticle', ['article' => $article->title]) }}" class="btn btn-dark px-5 rounded-pill">Read more...</a>
                </div>
            </div>
        </div>
    </div>
</div>
