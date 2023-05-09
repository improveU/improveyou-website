<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <script defer src="{{ asset('js/animate.js') }}"></script>
    <script defer src="{{ asset('js/backToTop.js') }}"></script>
    <script defer src="{{ asset('js/rootPayment.js') }}"></script>
    <script src="{{ asset('js/statusMessage.js') }}"></script>

    <title>Home</title>
</head>

<body>

<x-flash/>

<section id="header">
    <header class="homeHeader">
        <x-header/>
    </header>
</section>

<section id="cover">
    <div class="catch">
        <h1>Get better every day</h1>
        <button class="btn" id="button" onclick="window.location.href = '/register';">
            Join now
        </button>
        <span>Improve your life now!</span>
    </div>
    <div class="moreArrow">
        <a href="#phrases">
            <img src="{{ asset('svg/arrowDown.svg') }}" alt="">
        </a>
    </div>
    <div class="linkDiscord">
        <a href="https://discord.gg/aQqUmVmGRA">
            Join our Discord Server
        </a>
    </div>
</section>

<section id="phrases">
    <div class="phrasesWrapper">
        <div class="phrasesContainer hiddenAnimation">
            <div class="phrase">
                <h2>Looking for a better you?</h2>
                Then you've come to the right place! We at Improve.you offer
                you the perfect platform to better realise yourself. We stand
                with our name that you will improve you. On our site you will
                find numerous trainings and advice from experts, on how to
                <span>make yourself your best.</span>
            </div>
        </div>
        <div class="phrasesContainer hiddenAnimation">
            <div class="phrase second">
                <h2>We provide you:</h2>
                <div>
                    <img src="{{ asset('svg/check.svg') }}" alt="">
                    Access to all courses
                </div>
                <div>
                    <img src="{{ asset('svg/check.svg') }}" alt="">
                    30 days money back guarantee
                </div>
                <div>
                    <img src="{{ asset('svg/check.svg') }}" alt="">
                    Professional support
                </div>
                <div>
                    <img src="{{ asset('svg/check.svg') }}" alt="">
                    Convenient payment
                </div>
            </div>
        </div>
    </div>
</section>

<section id="categories">
    <h1 class="sectionTitle">Our Categories</h1>
    <div class="categoryWrapper">
        <div class="categoryContainer">
            <div class="hiddenAnimation">
                <div class="category-text rightBottom">Body Weight</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text rightTop dark">Add. Weights</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text leftBottom">Dancing</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text leftTop dark">Yoga</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text rightBottom">Balance</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text rightTop dark">Stretching</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text leftBottom">Supplements</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text leftTop dark">Meditation</div>
            </div>
            <div class="hiddenAnimation">
                <div class="category-text leftBottom">Healthy Eating</div>
            </div>
        </div>
    </div>
</section>

<section id="prices">
    <h1 class="sectionTitle">Prices</h1>
    <div class="subscribeWrapper hiddenAnimation">
        <x-payment.pCardBeginner> Join now</x-payment.pCardBeginner>
        <x-payment.pCardImprover> Join now</x-payment.pCardImprover>
        <x-payment.pCardCreator> Join now</x-payment.pCardCreator>
    </div>
</section>

<section id="services">
    <h1 class="sectionTitle">Services</h1>
    <div class="serviceWrapper hiddenAnimation">

        <div class="serviceContainer">
            <div class="picture">
                <img src="{{ asset('img/ourservice/gymweights.webp') }}" alt="">
            </div>
            <div class="description">
                <h1>Courses</h1>
                <p>Online courses created to improve your life offer endless opportunities for growth and self-improvement. Embrace the journey and unlock your full potential today.</p>
                <button class="btn" id="button" onclick="window.location.href = '/register';">
                    Join now
                </button>
            </div>
        </div>

        <div class="serviceContainer">
            <div class="picture">
                <img src="{{ asset('img/ourservice/womanyoga.webp') }}" alt="">
            </div>
            <div class="description">
                <h1>Creators</h1>
                <p>Creating courses to improve your life on a website empowers both you and your audience. Share your knowledge, deepen your understanding and transform lives today.</p>
                <button class="btn" id="button" onclick="window.location.href = '/register';">
                    Join now
                </button>
            </div>
        </div>

    </div>
</section>

<section id="footer">
    <x-footer/>
</section>

</body>

</html>
