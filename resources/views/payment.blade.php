@extends('layouts.twoSplit')

@section('head')
    <script defer src="{{ asset('js/paymentRedirect.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Pay Invoice')

@section('splitOne')
    <x-formPayment :id="$id"/>
@endsection

@section('splitTwo')
    <img src="{{ asset('img/cover/ctImprove.webp') }}" alt="">
    <h1>ITS PAYMENT TIME</h1>

    <section id="subscribeOverviewCard">
        <div class="subscribeWrapper">
            @if($id == 1)
                <x-payment.pcardBeginner> Change subscription </x-payment.pcardBeginner>
            @endif
            @if($id == 2)
                <x-payment.pcardImprover> Change subscription </x-payment.pcardImprover>
            @endif
            @if($id == 3)
                <x-payment.pcardCreator> Change subscription </x-payment.pcardCreator>
            @endif
        </div>
    </section>

@endsection
