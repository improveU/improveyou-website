@extends('layouts.default')
@section('head')

@endsection
@section('title', 'FAQ')

@section('content')

    <section id="navLinkTree">
        <nav>
            <h1>FAQ</h1>
            <div class="linkTree">
                <a href="/">Home / </a>
                <a href="">FAQ / </a>
            </div>
        </nav>
    </section>


    <section id="faq">
        <div class="faqWrapper">

            <button class="faqContainer">
                <p class="question"> How can I create my own courses? </p>
                <p class="answer"> To create courses yourself, you will need the Creator subscription. </p>
            </button>

            <button class="faqContainer">
                <p class="question"> I have a question for a course creator, how do I contact him? </p>
                <p class="answer"> You can use the Chat feature to reach every one of your favourite creators. </p>
            </button>

            <button class="faqContainer">
                <p class="question"> Can I use the platform on my mobile device? </p>
                <p class="answer"> We are currently not working on a mobile app, but for now you can open our website on
                    your phone's browser. </p>
            </button>

            <button class="faqContainer">
                <p class="question"> How can I contact customer support if I need assistance? </p>
                <p class="answer"> You can reach support via our E-Mail: info@im.proveyou.com </p>
            </button>

            <button class="faqContainer">
                <p class="question"> How can I cancel my subscription or delete my account? </p>
                <p class="answer"> In settings, under details, you can cancel your subscription. Your data will be
                    deleted upon thirty days of the subscription ending. </p>
            </button>

            <button class="faqContainer">
                <p class="question"> Are there any integrations or API available for the platform? </p>
                <p class="answer"> We are currently not offering any API, but that might change. If you want to stay in
                    the loop you can subscribe to our newsletter </p>
            </button>

            <button class="faqContainer">
                <p class="question"> Is there a fee if i cancel my subscription? </p>
                <p class="answer"> There are no hidden extra fee's on our platform </p>
            </button>

            <button class="faqContainer">
                <p class="question"> Are there any security measures in place to protect my personal information? </p>
                <p class="answer"> We take data security seriously. We treat you data with utmost confidence. </p>
            </button>
        </div>
    </section>

@endsection

@section('scripts')
    <script src="{{asset('js/faq.js')}}" defer></script>
@endsection
