@extends('layouts.twoSplit')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Register')

@section('splitOne')
    <x-formRegister/>
@endsection

@section('splitTwo')
    <img src="{{ asset('img/cover/ctRun.webp') }}" alt="">
    <h1>
        It's time To <br> move forward
    </h1>
@endsection



