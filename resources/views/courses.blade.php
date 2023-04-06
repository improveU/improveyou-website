@extends('layouts.default')

@section('title', 'Courses')

@section('content')
    @foreach($courses as $course)
        {{$course->title}} <br>
    @endforeach
@endsection
