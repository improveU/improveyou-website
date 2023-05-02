@extends('layouts.default')

@section('title', 'About')

@section('content')

    <section id="navLinkTree">
        <nav>
            <h1>About</h1>
            <div class="linkTree">
                <a href="/">Home / </a>
                <a href="">About / </a>
            </div>
        </nav>
    </section>

    <section id="about">
        <div class="aboutWrapper">
            <div class="aboutContainer">
                <div class="picture">
                    <img src="{{ asset('img/people/TimBernhard.webp') }}" alt="">
                </div>
                <div class="description">
                    <h1>Tim Bernhard</h1>
                    <p> <span>Project Manager </span><br>
                        ensures that our projects are delivered on time, within budget, and to the satisfaction of our clients.
                    </p>
                    <button class="btn" id="button" onclick="location.href='mailto:tim_bernhard@sluz.ch';">
                        Contact
                    </button>
                </div>
            </div>

            <div class="aboutContainer">
                <div class="picture">
                    <img src="{{ asset('img/people/YannicStuder.webp') }}" alt="">
                </div>
                <div class="description">
                    <h1>Yannic Studer</h1>
                    <p><span>Design Manager </span><br>
                        developing the user-facing portion, ensures that our interfaces are intuitive and easy to use.
                    </p>
                    <button class="btn" id="button" onclick="location.href='mailto:yannic_studer1@sluz.ch';">
                        Contact
                    </button>
                </div>
            </div>

            <div class="aboutContainer">
                <div class="picture">
                    <img src="{{ asset('img/people/DemianFlury.webp') }}" alt="">
                </div>
                <div class="description">
                    <h1>Demian Flury</h1>
                    <p><span>Backend Developer </span><br>
                        developing the server-side portion, ensuring that our systems are scalable, efficient, and secure.
                    </p>
                    <button class="btn" id="button" onclick="location.href='mailto:demian_flury@sluz.ch';">
                        Contact
                    </button>
                </div>
            </div>

            <div class="aboutContainer">
                <div class="picture">
                    <img src="{{ asset('img/people/ElijaZürcher.webp') }}" alt="">
                </div>
                <div class="description">
                    <h1>Elija Zürcher</h1>
                    <p><span>Customer Support</span><br>
                        provides high-quality customer service and ensures that our customers are satisfied.
                    </p>
                    <button class="btn" id="button" onclick="location.href='mailto:elija_zuercher@sluz.ch';">
                        Contact
                    </button>
                </div>
            </div>

            <div class="aboutContainer">
                <div class="picture">
                    <img src="{{ asset('img/people/XavierScherer.webp') }}" alt="">
                </div>
                <div class="description">
                    <h1>Xavier Scherer</h1>
                    <p><span>Sales Manager</span><br>
                        manages our sales team and ensures that we meet our revenue targets.
                    </p>
                    <button class="btn" id="button" onclick="location.href='mailto:xavier_scherer@sluz.ch';">
                        Contact
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
