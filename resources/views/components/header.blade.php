<header>
    <div class="loader"></div>
    <nav>
        <a class="logoLink" href="{{ url('/') }}">
            <x-logo/>
        </a>
        @auth
        <div class="searchIndicator" id="searchIndicator">
            <span>Search</span>
            <img src="{{ asset('svg/logoSearch.svg') }}">
        </div>
        @endauth
        <div class="linkWrapper">
            @if (isset(auth()->user()->subscription_id) && auth()->user()->subscription_id == 3)
            <a href="{{ url('/create-course') }}">
                <img src="{{ asset('svg/logoCreate.svg') }}">
            </a>
            @endif
            @auth
            <a class="profile" href="{{ url('/profile') }}">
                <img src="{{ asset('storage/' . auth()->user()->profile_picture_path) }}">
            </a>
            @endauth
            @guest
            <a href="{{ url('/login') }}">
                <img src="{{ asset('svg/logoProfile.svg') }}">
            </a>
            @endguest
        </div>
    </nav>
</header>

@auth
<section id="searchToggleMenu" class="hidden">
    <form method="POST" class="searchFormWrapper" id="search-form" action="{{ url('search-results') }}">
        @csrf
        <div class="searchContainer">
            <input class="searchField" type="text" id="search-input" name="q" placeholder="Search something" autocomplete="off">
            <button type="submit">
                <img src="{{ asset('svg/logoSearch.svg') }}">
            </button>
        </div>
        <ul id="search-results"></ul>
    </form>
</section>
@endauth
