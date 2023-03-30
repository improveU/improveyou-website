@extends('layouts.twoSplit')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Pay Invoice')

@section('splitOne')
    <x-formPayment/>
@endsection

@section('splitTwo')
    <h1>ITS PAYMENT TIME</h1>
    <div class="fourthContainer">
        <div class="subscribeWrapper">
            @if($id == 1)
                <x-cardBeginner/>
            @endif
            @if($id == 2)
                <x-cardImprover/>
            @endif
                @if($id == 3)
                    <x-cardCreator/>
                @endif
        </div>
    </div>
@endsection
