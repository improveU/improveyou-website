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
@endsection