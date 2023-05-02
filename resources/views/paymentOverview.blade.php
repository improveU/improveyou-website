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
                <x-payment.pcardBeginner> Subscribe now</x-payment.pcardBeginner>
                <x-payment.pcardImprover> Subscribe now</x-payment.pcardImprover>
                <x-payment.pcardCreator> Subscribe now</x-payment.pcardCreator>
            </div>
        </section>
    </section>

@endsection
