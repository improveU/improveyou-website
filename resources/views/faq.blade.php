@extends('layouts.default')
@section('head')

@endsection
@section('title', 'FAQ')

@section('content')
<main class="card">
    
  
    <h2 class="title">FAQ</h2>
  
    <div class="acc-container">
  
      <button class="acc-btn">How can I create my own courses?</button>
      <div class="acc-content">
        <p>
            To create courses yourself, you will need the Creator suscription.
        </p>
      </div>
  
      <button class="acc-btn">
        I have a question for a course creator, how do I contact him?
      </button>
      <div class="acc-content">
        <p>
            You can use the Chat feature to reach every one of your favourite creators.
        </p>
      </div>
  
      <button class="acc-btn">
        Can I use the platform on my mobile device?
      </button>
      <div class="acc-content">
        <p>
            We are currently not working on a mobile app, but for now you can open our website on your phone’s browser.        </p>
      </div>
  
      <button class="acc-btn">
        How can I contact customer support if I need assistance?
      </button>
      <div class="acc-content">
        <p>
            You can reach support via our E-Mail: info@im.proveyou.com
        </p>
      </div>
  
      <button class="acc-btn">
        How can I cancel my subscription or delete my account?
      </button>
      <div class="acc-content">
        <p>
            In settings, under details, you can cancel your subscription. Your data will be deleted upon thirty days of the subscription ending.
        </p>
      </div>
  
      <button class="acc-btn">
        Are there any integrations or API available for the platform?
      </button>
      <div class="acc-content">
        <p>
            We are currently not offering any API, but that might change. If you want to stay in the loop you can subscribe to our newsletter
        </p>
      </div>
  
      <button class="acc-btn">
        Is there a fee if i cancel my subscription ?
      </button>
      <div class="acc-content">
        <p>
            There are no hidden extra fee's on our platform
        </p>
      </div>
  
      <button class="acc-btn">
        Are there any security measures in place to protect my personal information?
      </button>
      <div class="acc-content">
        <p>
            We take data security seriously. We treat you data with utmost confidence.
        </p>
      </div>
  
    </div>
  </main>
@endsection

@section('scripts')
    <script src="{{asset('js/faq.js')}}"></script>
@endsection