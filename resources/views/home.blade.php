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
            <a href="https://discord.gg/aQqUmVmGRA">
                Join our Discord Server
            </a>
        </div>
    </section>
    <section id="phrases">

    </section>
    <section id="categories">

    </section>
    <section id="prices">

    </section>
    <section id="services">

    </section>
    <section id="footer">

    </section>
    <div class="secondContainer">

        <div class="leftContainer">
            <div class="content">
                <h1 style="margin-top: 0%">Looking for a better you?</h1>

                <p class="smallText">
                    Then you've come to the right place! We at Improve.you offer
                    you the perfect platform to better realise yourself. We stand
                    with our name that you will improve you. On our site you will
                    find numerous trainings and advice from experts, on how to
                    make yourself your best.
                </p>
            </div>
        </div>
        <div class="rightContainer">
            <div class="content2">
                <h2 style="margin-top: 0%">We provide you:</h2>
                <div class="iconandtext">
                    <div class="icon2"><img src="{{ asset('img/annehmen.webp') }}" class="icon"></div>
                    <div class="text">Access to all courses</div>
                </div>

                <div class="iconandtext">
                    <div class="icon2"><img src="{{ asset('img/annehmen.webp') }}" class="icon"></div>
                    <div class="text">30 days money back guarantee</div>
                </div>

                <div class="iconandtext">
                    <div class="icon2"><img src="{{ asset('img/annehmen.webp') }} " class="icon"></div>
                    <div class="text">Professional support</div>
                </div>

                <div class="iconandtext">
                    <div class="icon2"><img src="{{ asset('img/annehmen.webp') }}" class="icon"></div>
                    <div class="text">Convenient payment</div>
                </div>
                <button class="btn" id="button" onclick="window.location.href = '/paymentOverview';">
                    View Prices
                </button>
            </div>

        </div>
    </div>
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
                                    Whatever goal you have set yourself:<br>
                                    Muscle building, strengthening your<br>
                                    back, a six-pack or powerful legs - in<br>
                                    our strength training section you'll<br>
                                    find everything you need to<br>
                                    successfully reach your goal.</div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.webp') }}" class="iconCorner">
                                    </button>
                                </div>

                            </div>
                        </div>
                        <div class="category-box">
                            <div class="pictureLeft pic2"></div>
                            <div class="DescriptionRight">
                                <h1 class="titelTag">Creators</h1>
                                <div class="leadText">
                                    Pulling of muscles to increase general<br>
                                    flexibility, stretching gymnastics.<br>
                                    The widening of artificially created<br>
                                    holes in the skin for the insertion of<br>
                                    jewellery</div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.webp') }}" class="iconCorner">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="category-box">
                            <div class="pictureLeft pic3"></div>
                            <div class="DescriptionRight">
                                <h1 class="titelTag">Food</h1>
                                <div class="leadText">
                                    Challenge yourself with one of our<br>
                                    courses. Our professional and<br>
                                    motivated trainers will push you to the<br>
                                    max.</div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.webp') }}" class="iconCorner">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="category-box">
                            <div class="pictureLeft pic4"></div>
                            <div class="DescriptionRight">
                                <h1 class="titelTag">Supplements</h1>
                                <div class="leadText">
                                    Go all out with creatine during your<br>
                                    short, explosive training sessions and<br>
                                    high-intensity exercises. It could<br>
                                    be the perfect supplement for you!

                                </div>
                                <div class="courseLink">
                                    <button class="btn" id="button"
                                        onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.webp') }}" class="iconCorner">
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
