<header>
    <div class="loader"></div>
    <nav>
        <a class="logoLink" href="{{ url('/') }}">
            <x-logo/>
        </a>
        <div class="linkWrapper">
            <button>
                <img src="{{ asset('svg/logoSearch.svg') }}">
            </button>
            @if (isset(auth()->user()->subscription_id) && auth()->user()->subscription_id == 3)
            <a href="{{ url('/create-course') }}">
                <img src="{{ asset('svg/logoCreate.svg') }}">
            </a>
            @endif
            @auth
            <a href="{{ url('/profile') }}">
                <img src="{{ asset('svg/logoProfile.svg') }}">
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
