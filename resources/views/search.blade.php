@extends('layouts.default')

@section('title', 'Search' )

@section('head')

@endsection

@section('content')

    <section id="navLinkTree">
        <nav>
            <h1>Results for: {{ $query }}</h1>
            <div class="linkTree">
                <a href="/">Home</a>
            </div>
        </nav>
    </section>

    {{ $profiles }}

    <section id="coursesAll">
        <h2>Courses</h2>
        <div class="courseWrapper">
            @foreach($courses as $course)
                <div class="courseCard">
                    <a href="/course/{{ $course->id }}">
                        <img src="{{ asset('storage/' . $course->image_path) }}" alt="">
                        <div class="courseInfo">
                            {{ $course->title }} <br>
                            {{ $course->created_at->format('Y-m-d') }} <br>
                            {{ $course->views }} <br>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>


@endsection
