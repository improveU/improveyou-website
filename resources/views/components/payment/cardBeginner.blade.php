<div class="subscribeCard">
   <h1>Beginner</h1>
   <p>Full access for 30 days for free then:</p>
   <h1 class="price">$ 10</h1>
   <p>/month</p>
   <p>Monthly invoice with 30 days money back guarantee</p>
    <form action="{{ url('/payment/1') }}" method="post">
        @csrf
        <button class="btn" onclick="subscriptionButton()">{{ $slot }}</button>
    </form>
</div>
