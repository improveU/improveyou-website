<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <title>Home</title>
</head>

<body>

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
                <img src="{{ asset('svg/arrowDown.svg') }}">
            </a>
        </div>
        <div class="linkDiscord">
            <a href="">
                Join our Discord Server
            </a>
        </div>
    </section>
    <section id="phrases">
        <div class="phrasesWrapper">
            <div class="phrasesContainer">
                <div class="phrase">
                    <h2>Looking for a better you?</h2>
                    Then you've come to the right place! We at Improve.you offer
                    you the perfect platform to better realise yourself. We stand
                    with our name that you will improve you. On our site you will
                    find numerous trainings and advice from experts, on how to
                    <span>make yourself your best.</span>
                </div>
            </div>
            <div class="phrasesContainer">
                <div class="phrase second">
                    <h2>We provide you:</h2>
                    <div>
                        <img src="{{ asset('svg/check.svg') }}">
                        Access to all courses
                    </div>
                    <div>
                        <img src="{{ asset('svg/check.svg') }}">
                        30 days money back guarantee 
                    </div>
                    <div>
                        <img src="{{ asset('svg/check.svg') }}">
                        Professional support
                    </div>
                    <div>
                        <img src="{{ asset('svg/check.svg') }}">
                        Convenient payment
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="categories">

    </section>
    <section id="prices">

    </section>
    <section id="services">

    </section>
    <section id="footer">

    </section>

    <div class="thirdContainer">
        <div class="title-container">
            <h1>Our Categories</h1>
        </div>
        <div class="middleMaker">
            <div class="grid-container">
                <div class="item-1">
                    <div class="category-text rightBottom">Yoga</div>
                </div>
                <div class="item-2">
                    <div class="category-text rightTop dark">Add. Weights</div>
                </div>
                <div class="item-3">
                    <div class="category-text leftBottom">Dancing</div>
                </div>
                <div class="item-4">
                    <div class="category-text leftTop dark">Aerobic</div>
                </div>
                <div class="item-5">
                    <div class="category-text rightBottom">Balance</div>
                </div>
                <div class="item-6">
                    <div class="category-text rightTop dark">Stretching</div>
                </div>
                <div class="item-7">
                    <div class="category-text leftBottom">Body Weight</div>
                </div>
                <div class="item-8">
                    <div class="category-text leftTop dark">Fitness</div>
                </div>
                <div class="item-9">
                    <div class="category-text leftBottom">Elastic Bands</div>
                </div>
            </div>

        </div>

        <div class="fourthContainer">
            <div class="title-container">
                <h1>Prices</h1>
            </div>
            <div class="subscribeWrapper">
                <x-cardBeginner />
                <x-cardImprover />
                <x-cardCreator />
            </div>
            <div class="middleMaker">
            </div>

            <div class="fithcontainer">
                <div class="title-container">
                    <h1>Our Services</h1>
                </div>
                <div class="middleMaker2">
                    <div class="grid-container3">
                        <div class="category-box">
                            <div class="pictureLeft"></div>
                            <div class="DescriptionRight">
                                <h1 class="titelTag">Strength</h1>
                                <div class="leadText">
                                    Whatever goal you have set yourself:
                                    Muscle building, strengthening your
                                    back, a six-pack or powerful legs - in
                                    our strength training section you'll
                                    find everything you need to
                                    successfully reach your goal.
                                </div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.png') }}" class="iconCorner">
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="category-box">
                            <div class="pictureLeft pic2"></div>
                            <div class="DescriptionRight">
                                <h1 class="titelTag">Creators</h1>
                                <div class="leadText">
                                    Pulling of muscles to increase general
                                    flexibility, stretching gymnastics.
                                    The widening of artificially created
                                    holes in the skin for the insertion of
                                    jewellery
                                </div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.png') }}" class="iconCorner">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="category-box">
                            <div class="pictureLeft pic3"></div>
                            <div class="DescriptionRight">
                                <h1 class="titelTag">Food</h1>
                                <div class="leadText">
                                    Challenge yourself with one of our
                                    courses. Our professional and
                                    motivated trainers will push you to the
                                    max.
                                </div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.png') }}" class="iconCorner">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="category-box">
                            <div class="pictureLeft pic4"></div>
                            <div class="DescriptionRight">
                                <h1 class="titelTag">Supplements</h1>
                                <div class="leadText">
                                    Go all out with creatine during your
                                    short, explosive training sessions and
                                    high-intensity exercises. It could
                                    be the perfect supplement for you!
                                </div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.png') }}" class="iconCorner">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <x-footer />

</body>

</html>
