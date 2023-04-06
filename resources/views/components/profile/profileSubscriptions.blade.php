<div class="overview-right">
    <h1>Subscriptions</h1>

    @if(Auth::user()->subscription_id == 1)
        <x-payment.cardBeginner/>
    @endif

    @if(Auth::user()->subscription_id == 2)
        <x-payment.cardImprover/>
    @endif

    @if(Auth::user()->subscription_id == 3)
        <x-payment.cardCreator/>
    @endif
</div>
