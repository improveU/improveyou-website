@extends('layouts.default')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
@endsection

@section('title', 'Course')

@section('content')

<section id="course">

    <div class="cover">
        <img src="{{ asset('storage/' . $course->image_path) }}" alt="">
    </div>

    <div class="c">
        <div class="courseInfo" >
            <h1 class="courseTitle">{!! $course->title !!}</h1>
            <div class="linkTree">
                <a href="/">Home / </a>
                <a href="/course">Courses / </a>
                <a href="">{!! $course->title !!}</a>
            </div>
            <div class="tags">
                -- Tags here --
            </div>
            <p class="introduction">
                {!! $course->introduction !!}
            </p>
            <div class="views">
                {!! $course->views !!} Views
            </div>
        </div>
        
        {!! $description !!}

    </div>
</section>

@endsection
