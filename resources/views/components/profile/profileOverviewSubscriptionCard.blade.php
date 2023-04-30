<div class="overviewSubscription">
    @if(auth()->user()->subscription_id == 1)
        <x-payment.CardBeginner>
            Change subscription
        </x-payment.CardBeginner>
    @elseif(auth()->user()->subscription_id == 2)
        <x-payment.CardImprover>
            Change subscription
        </x-payment.CardImprover>
    @elseif(auth()->user()->subscription_id == 3)
        <x-payment.CardCreator>
            Change subscription
        </x-payment.CardCreator>
    @else
        <x-payment.CardNone>
            Get a subscription
        </x-payment.CardNone>
    @endif
</div>
