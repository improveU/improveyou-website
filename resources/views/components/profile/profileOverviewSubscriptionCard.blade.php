<div class="overviewSubscription">
    @if(auth()->user()->subscription_id == 1)
        <x-payment.cardBeginner>
            Change subscription
        </x-payment.cardBeginner>
    @elseif(auth()->user()->subscription_id == 2)
        <x-payment.cardImprover>
            Change subscription
        </x-payment.cardImprover>
    @elseif(auth()->user()->subscription_id == 3)
        <x-payment.cardCreator>
            Change subscription
        </x-payment.cardCreator>
    @elseif(auth()->user()->subscription_id == 4)
        <x-payment.cardRoot/>
    @else
        <x-payment.cardNone>
            Get a subscription
        </x-payment.cardNone>
    @endif
</div>
