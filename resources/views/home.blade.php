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

    <header class="homeHeader">
        <x-header/>
    </header>


    <div class="mainContainer">
        <div class="unterContainer">
            <div class="catch">
                GET BETTER
            </div>
            <div class="catch2">
                EVERY DAY
            </div>
            <div class="centerBtn">
                <button class="btn" id="button" onclick="window.location.href = '/register';">
                    Join now
                </button>
            </div>

            <div class="underText">
                improve your life now!
            </div>
        </div>
    </div>
    <div class="secondContainer">

        <div class="leftContainer">
            <div class="content">
                <h1 style="margin-top: 0%">Looking for a better you?</h1>

                <p class="smallText">
                    Then you’ve come to the right place! We at Improve.you offer
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
                    <div class="icon2"><img src="{{ asset('img/annehmen.png') }}" class="icon"></div>
                    <div class="text">Access to all courses</div>
                </div>

                <div class="iconandtext">
                    <div class="icon2"><img src="{{ asset('img/annehmen.png') }}" class="icon"></div>
                    <div class="text">30 days money back guarantee</div>
                </div>

                <div class="iconandtext">
                    <div class="icon2"><img src="{{ asset('img/annehmen.png') }} " class="icon"></div>
                    <div class="text">Professional support</div>
                </div>

                <div class="iconandtext">
                    <div class="icon2"><img src="{{ asset('img/annehmen.png') }}" class="icon"></div>
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
                    <div class="category-text leftBottom">Fitness</div>
                </div>
                <div class="item-2">
                    <div class="category-text leftTop">Body Weight</div>
                </div>
                <div class="item-3">
                    <div class="category-text leftBottom">Elastic Bands</div>
                </div>
                <div class="item-4">
                    <div class="category-text rightTop">Dancing</div>
                </div>
                <div class="item-5">
                    <div class="category-text rightBottom">Yoga</div>
                </div>
                <div class="item-6">
                    <div class="category-text leftBottom">Add. Weights</div>
                </div>
                <div class="item-7">
                    <div class="category-text rightBottom">Aerobic</div>
                </div>
                <div class="item-8">
                    <div class="category-text rightBottom">Balance</div>
                </div>
                <div class="item-9">
                    <div class="category-text leftTop">Stretching</div>
                </div>
            </div>
        </div>

        <div class="fourthContainer">
            <div class="title-container">
                <h1>Prices</h1>
            </div>
                <div class="middleMaker">
                <div class="grid-container2">
                    <div class="card">
                        <h1>Beginner</h1>
                        <p>Full access for 30 days for free then:</p>
                        <h1 class="price">$ 10</h1>
                        <p>/month</p>
                        <p>Monthly invoice with 30 days money back guarantee</p>
                        <button class="btn" id="button" onclick="window.location.href = '/payment{id}';">
                            Subscribe to Beginner
                        </button>
                    </div>
                    <div class="card">
                        <h1 class="cardTitel">Improver</h1>
                        <p class="access">Full access for all offers</p>
                        <p class="priceCard">$ 100</p>
                        <p class="perMonth">/year</p>
                        <p class="descriptionText">
                            Save up to two monthly<br> bills per year
                            guarantee</p>
                        <div class="middleSubcscribe">
                            <button class="btn" id="button" onclick="window.location.href = '/payment{id}';">
                                Subscribe to Improver
                            </button>
                        </div>
                    </div>
                    <div class="card">
                        <h1 class="cardTitel">Creator</h1>
                        <p class="access">Full access for all offers<br>
                            Option to create own offers <br>
                        </p>
                        <p class="priceCard">$ 200</p>
                        <p class="perMonth">/year</p>
                        <p class="descriptionText">
                            Offer for content creators<br>
                             to share there media
                        </p>
                        <div class="middleSubcscribe">
                            <button class="btn" id="button" onclick="window.location.href = '/payment{id}';">
                                Subscribe to Creator
                            </button>
                        </div>
                    </div>
                </div>
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
                                        <button class="btn" id="button" onclick="window.location.href = '/courses{category_id}';">
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
                                    Pulling of muscles to increase general<br>
                                    flexibility, stretching gymnastics.<br>
                                    The widening of artificially created<br>
                                    holes in the skin for the insertion of<br>
                                    jewellery</div>
                                <div class="courseLink">
                                    <button class="btn" id="button" onclick="window.location.href = '/courses{category_id}';">
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
                                    Challenge yourself with one of our<br>
                                    courses. Our professional and<br>
                                    motivated trainers will push you to the<br>
                                    max.</div>
                                    <div class="courseLink">
                                        <button class="btn" id="button" onclick="window.location.href = '/courses{category_id}';">
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
                                    Go all out with creatine during your<br>
                                    short, explosive training sessions and<br>
                                    high-intensity exercises. It could<br>
                                    be the perfect supplement for you!

                                </div>
                                <div class="courseLink">
                                    <button class="btn" id="button" onclick="window.location.href = '/courses{category_id}';">
                                        Courses
                                        <img src="{{ asset('img/rightCorner1.png') }}" class="iconCorner">
                                    </button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

    <x-footer/>

    </body>

</html>
