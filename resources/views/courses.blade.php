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

        <section id="coursesLatest">
            <h2>Latest</h2>
            <div class="courseWrapper">
                @foreach($latest as $course)
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

        <section id="coursesRandom">
            <h2>Random</h2>
            <div class="courseWrapper">
                @foreach($random as $course)
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

        <section id="coursesAll">
            <h2>All</h2>
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
    </section>
@endsection
