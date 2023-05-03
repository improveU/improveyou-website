@extends('layouts.default')

@section('title', 'Courses')

@section('content')

    <section id="navLinkTree">
        <nav>
            <h1>Courses</h1>
            <div class="linkTree">
                <a href="/">Home</a>
            </div>
        </nav>
    </section>

    <section id="coursesOverview">
        <section id="coursesPopular">
            <h2>Popular</h2>
            <div class="courseWrapper">
                @foreach($popular as $course)
                    <div class="courseCard">
                        <a href="/course/{{ $course->id }}">
                            <img src="{{ asset('storage/' . $course->image_thumbnail_path) }}" alt="">
                            <div class="courseInfo">
                                <h2>{{ $course->title }}</h2>
                                <div class="info">
                                    <div>{{ $course->views }} views</div>
                                    <div>{{ $course->created_at->format('Y-m-d') }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <a href="/courses/popular" class="btn">more</a>
        </section>

        <section id="coursesLatest">
            <h2>Latest</h2>
            <a href="/courses/latest">see more</a>
            <div class="courseWrapper">
                @foreach($latest as $course)
                    <div class="courseCard">
                        <a href="/course/{{ $course->id }}">
                            <img src="{{ asset('storage/' . $course->image_thumbnail_path) }}" alt="">
                            <div class="courseInfo">
                                <div class="title">
                                    {{ $course->title }}
                                </div>
                                <div class="introduction">
                                    {{ $course->introduction }}
                                </div>
                                <div class="info">
                                    <div class="views">
                                        {{ $course->views }} views
                                    </div>
                                    <div class="date">
                                        {{ $course->created_at->format('Y-m-d') }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="coursesRandom">
            <h2>Random</h2>
            <a href="/courses/random">see more</a>
            <div class="courseWrapper">
                @foreach($random as $course)
                    <div class="courseCard">
                        <a href="/course/{{ $course->id }}">
                            <img src="{{ asset('storage/' . $course->image_thumbnail_path) }}" alt="">
                            <div class="courseInfo">
                                <div class="title">
                                    {{ $course->title }}
                                </div>
                                <div class="introduction">
                                    {{ $course->introduction }}
                                </div>
                                <div class="info">
                                    <div class="views">
                                        {{ $course->views }} views
                                    </div>
                                    <div class="date">
                                        {{ $course->created_at->format('Y-m-d') }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="coursesAll">
            <h2>All</h2>
            <a href="/courses/all">see more</a>
            <div class="courseWrapper">
                @foreach($courses as $course)
                    <div class="courseCard">
                        <a href="/course/{{ $course->id }}">
                            <img src="{{ asset('storage/' . $course->image_thumbnail_path) }}" alt="">
                            <div class="courseInfo">
                                <div class="title">
                                    {{ $course->title }}
                                </div>
                                <div class="introduction">
                                    {{ $course->introduction }}
                                </div>
                                <div class="info">
                                    <div class="views">
                                        {{ $course->views }} views
                                    </div>
                                    <div class="date">
                                        {{ $course->created_at->format('Y-m-d') }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
    </section>
@endsection
