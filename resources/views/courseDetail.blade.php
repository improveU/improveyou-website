@extends('layouts.default')

@section('title', 'Profile')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
@endsection

@section('content')
{!! $description !!}
@foreach($course->tags as $tag)
    {{$tag->name}}
@endforeach
@endsection

