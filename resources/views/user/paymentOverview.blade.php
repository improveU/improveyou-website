@extends('layouts.default')

@section('title', 'Payment')

@section('head')
    <script src="{{ asset('js/rootPayment.js') }}" defer></script>
@endsection

@section('content')

    <section id="paymentOverviewPrices">
        <section id="prices">
            <h1 class="sectionTitle">Prices</h1>
            <div class="subscribeWrapper">
                <x-payment.pCardBeginner> Subscribe now</x-payment.pCardBeginner>
                <x-payment.pCardImprover> Subscribe now</x-payment.pCardImprover>
                <x-payment.pCardCreator> Subscribe now</x-payment.pCardCreator>
            </div>
        </section>
    </section>

@endsection
