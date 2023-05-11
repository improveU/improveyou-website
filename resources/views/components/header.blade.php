<header>
    <div class="loader"></div>
    <nav>
        <a class="logoLink" href="{{ url('/') }}">
            <x-logo/>
        </a>
        @if(Auth::check() && isset(auth()->user()->subscription_id) && (auth()->user()->subscription_id != 0))
            <div class="searchIndicator" id="searchIndicator">
                <span>Search</span>
                <img src="{{ asset('svg/logoSearch.svg') }}">
            </div>
        @endif
        <div class="linkWrapper">
            @if (Auth::check() && isset(auth()->user()->subscription_id) && (auth()->user()->subscription_id == 3 || auth()->user()->subscription_id == 4))
                <a href="{{ url('/createCourse') }}">
                    <img src="{{ asset('svg/logoCreate.svg') }}">
                </a>
            @endif
            @if (Auth::check() && isset(auth()->user()->subscription_id) && auth()->user()->subscription_id == 4)
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('svg/logoDashboard.svg') }}">
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
                <input class="searchField" type="text" id="search-input" name="q" placeholder="Search something"
                       autocomplete="off">
                <button type="submit">
                    <img src="{{ asset('svg/logoSearch.svg') }}">
                </button>
            </div>
            <div id="search-loading-spinner" style="display: none;">
                <img src="{{ asset('svg/loadingDots.svg') }}">
            </div>
            <ul id="search-results"></ul>
        </form>
    </section>
@endauth
