@extends('layouts.twoSplit')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Login')

@section('splitOne')
    <x-formLogin/>
@endsection

@section('splitTwo')
    <img src="{{ asset('img/cover/ctImprove.webp') }}" alt="">
    <h1>
        It's time To <br> Improve
    </h1>
@endsection
