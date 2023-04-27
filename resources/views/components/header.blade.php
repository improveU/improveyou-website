<header>
    <div class="loader"></div>
    <nav>
        <a class="logoLink" href="{{ url('/') }}">
            <x-logo/>
        </a>
        <div class="linkWrapper">

            <form id="search-form">
                <input type="text" id="search-input" name="q" placeholder="Search...">
                <button type="submit">Search</button>
            </form>

            @auth
            <button>
                <img src="{{ asset('svg/logoSearch.svg') }}">
            </button>
            @endauth
            @if (isset(auth()->user()->subscription_id) && auth()->user()->subscription_id == 3)
            <a href="{{ url('/create-course') }}">
                <img src="{{ asset('svg/logoCreate.svg') }}">
            </a>
            @endif
            @auth
            <a href="{{ url('/profile') }}">
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
