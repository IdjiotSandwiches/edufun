<nav class="navbar navbar-expand-lg bg-body-tertiary fw-semibold shadow">
    <div class="container-fluid px-4 py-2">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/edufun_logo.png') }}" alt="" class="w-25">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav gap-4">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'text-primary text-decoration-underline' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('category') ? 'text-primary text-decoration-underline' : '' }}" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('category', ['category' => 'Data Science']) }}">Data Science</a></li>
                        <li><a class="dropdown-item" href="{{ route('category', ['category' => 'Network Security']) }}">Network Security</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs(['writers', 'getWriterArticles']) ? 'text-primary text-decoration-underline' : '' }}" href="{{ route('writers') }}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('aboutUs') ? 'text-primary text-decoration-underline' : '' }}" href="{{ route('aboutUs') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('popular') ? 'text-primary text-decoration-underline' : '' }}" href="{{ route('popular') }}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
