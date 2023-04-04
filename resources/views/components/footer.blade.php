<footer>
    <nav>
        <div class="quicklinks">
            <dl>
                <dt>
                    <img src="{{ asset('svg/logoInfo.svg') }}">
                    Support
                </dt>
                <dd><a href="{{ url('/contact') }}">Contact Us</a></dd>
                <dd><a href="{{ url('/faq') }}">FAQ</a></dd>
            </dl>
            <dl>
                <dt>
                    <img src="{{ asset('svg/logoCompany.svg') }}">
                    Company
                </dt>
                <dd><a href="{{ url('/about') }}">About Us</a></dd>
                <dd><a href="{{ url('/') }}">Search</a></dd>
            </dl>
        </div>
        <div class="thirdparty">
            <dl>
                <dt>Sign in with Apple & Google</dt>
                <dd>
                    <a href="https://about.google/"><img src="{{ asset('svg/logoGoogle.svg') }}">Google</a>
                    <a href="https://www.apple.com/"><img src="{{ asset('svg/logoApple.svg') }}">Apple</a>
                </dd>
            </dl>
        </div>
        <div class="socialmedia">
            <dl>
                <dt>More inspiration from us</dt>
                <dd>
                    <a href="{{ url('/') }}"><img src="{{ asset('svg/logoDiscord.svg') }}"></a>
                    <a href="{{ url('/') }}"><img src="{{ asset('svg/logoTwitter.svg') }}"></a>
                    <a href="{{ url('/') }}"><img src="{{ asset('svg/logoInstagram.svg') }}"></a>
                    <a href="{{ url('/') }}"><img src="{{ asset('svg/logoFacebook.svg') }}"></a>
                </dd>
            </dl>
        </div>
        <div class="copyright">
            <hr>
            <div class="copyrightbar">
                © Copyright 2023. All Rights Reserved.
            </div>
        </div>
        <button class="toTop" >
            up
        </button>
    </nav>
</footer>
