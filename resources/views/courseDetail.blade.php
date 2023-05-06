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
                <h1 class="courseTitle">{!! $course->title !!}</h1>
                <div class="linkTree">
                    <a href="/">Home / </a>
                    <a href="/">Courses / </a>
                    <a href="">{!! $course->title !!}</a>
                </div>
                <div class="tags">
                    @foreach($course->tags as $tag)
                        <div> {{$tag->name}} </div>
                    @endforeach
                </div>
                <p class="introduction">
                    {!! $course->introduction !!}
                </p>
                <div class="views">
                    {!! $course->views !!} Views
                </div>
                <a class="profile" href="{{'/profile/' . $creator->id }}">
                    <img src="{{ asset('storage/' . $creator->profile_picture_path) }}" alt="">
                </a>
            </div>

            {!! $description !!}

        </div>
    </section>

@endsection

