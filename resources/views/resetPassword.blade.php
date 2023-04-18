@extends('layouts.twoSplit')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Reset Password')

@section('splitOne')
    <x-formResetPassword/>
@endsection

@section('splitTwo')
    <img src="{{ asset('img/cover/ctImprove.webp') }}" alt="">
    <h1>
        Try to remember it <br> this time ;)
    </h1>
@endsection
