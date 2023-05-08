<section id="profileSubscriptionEdit" class="hidden">
    <h1>Change subscription</h1>
    <div class="subscribeWrapper">
        @if(auth()->user()->subscription_id != 0)
        <x-payment.pCardNone> Change now</x-payment.pCardNone>
        @endif
        @if(auth()->user()->subscription_id != 1)
        <x-payment.pCardBeginner> Change now</x-payment.pCardBeginner>
        @endif
        @if(auth()->user()->subscription_id != 2)
        <x-payment.pCardImprover> Change now</x-payment.pCardImprover>
        @endif
        @if(auth()->user()->subscription_id != 3)
        <x-payment.pCardCreator> Change now</x-payment.pCardCreator>
        @endif
    </div>
</section>
