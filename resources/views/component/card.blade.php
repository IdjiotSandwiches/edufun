@props(['articles'])

@foreach ($articles as $article)
    <div class="card mb-3 border-0">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset($article->image_link) }}" class="img-fluid ratio ratio-1x1 rounded-4" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ \Carbon\Carbon::parse($article->created_at)->format('d M Y') }} | by <span>{{ $article->writer->name }}</span></p>
                    <p class="card-text">{{ $article->excerpt }}</p>
                    <div class="d-flex justify-content-end">
                        <a type="button" href="{{ route('getArticle', ['article' => $article->slug]) }}" class="btn btn-dark">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
