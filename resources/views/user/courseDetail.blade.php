@extends('layouts.default')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
@endsection

@section('title', $course->title)

@section('content')

    <section id="course">

        <div class="cover">
            <img src="{{ asset('storage/' . $course->image_cover_path) }}" alt="">
        </div>

        <div class="c">
            <div class="courseInfo">
                <h1 class="courseTitle">{{ $course->title }}</h1>
                <div class="linkTree">
                    <a href="/">Home / </a>
                    <a href="/">Courses / </a>
                    <a href="">{{ $course->title }}</a>
                </div>
                <div class="tags">
                    @foreach($course->tags as $tag)
                        <div> {{$tag->name}} </div>
                    @endforeach
                </div>
                <p class="introduction">
                    {{ $course->introduction }}
                </p>
                <div class="views">
                    {{ $course->views }} Views
                </div>
                <a class="profile" href="{{'/profile/' . $creator->id }}">
                    <img src="{{ asset('storage/' . $creator->profile_picture_path) }}" alt="">
                </a>
                <form action="{{ url('/report/' . $course->id) }}" method="post">
                    @csrf
                    <button class="quickReport" type="submit"></button>
                </form>
                @if(auth()->user()->subscription_id == 4 || auth()->user()->id == $course->creator_id)
                    <a class="btn" href="{{ '/editCourse/' . auth()->user()->id . '/' . $course->id }}">
                        Edit
                    </a>
                @endif
            </div>

            {!! $description !!}

        </div>
    </section>

@endsection

