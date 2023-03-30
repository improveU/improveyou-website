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
            <a href="{{ url('/createCourse') }}">
                <img src="{{ asset('svg/logoCreate.svg') }}">
            </a>
            <a href="{{ url('/profile') }}">
                <img src="{{ asset('svg/logoProfile.svg') }}">
            </a>
        </div>
    </nav>
</header>
