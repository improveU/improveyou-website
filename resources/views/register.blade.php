@extends('layouts.twoSplit')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Register')

@section('splitOne')
    <x-formRegister/>
@endsection

@section('splitTwo')
    Picture here
@endsection



