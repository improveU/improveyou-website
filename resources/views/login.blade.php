@extends('layouts.twoSplit')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('title', 'Login')

@section('splitOne')
    <x-formLogin/>
@endsection

@section('splitTwo')
    Picture here
@endsection