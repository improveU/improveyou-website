@extends('layouts.default')

@section('title', 'Payment')

@section('head')

@endsection

@section('content')

    <section id="paymentOverviewPrices">
        <section id="prices">
            <h1 class="sectionTitle">Prices</h1>
            <div class="subscribeWrapper">
                <x-payment.cardBeginner> Subscribe now </x-payment.cardBeginner>
                <x-payment.cardImprover> Subscribe now </x-payment.cardImprover>
                <x-payment.cardCreator> Subscribe now </x-payment.cardCreator>
            </div>
        </section>
    </section>

@endsection
