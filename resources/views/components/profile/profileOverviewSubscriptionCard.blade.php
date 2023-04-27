<div class="overviewSubscription">
    @if(auth()->user()->subscription_id == 1)
        <x-payment.pCardBeginner>
            Change subscription
        </x-payment.pCardBeginner>
    @elseif(auth()->user()->subscription_id == 2)
        <x-payment.pCardImprover>
            Change subscription
        </x-payment.pCardImprover>
    @elseif(auth()->user()->subscription_id == 3)
        <x-payment.pCardCreator>
            Change subscription
        </x-payment.pCardCreator>
    @else
        <x-payment.pCardNone>
            Get a subscription
        </x-payment.pCardNone>
    @endif
</div>
