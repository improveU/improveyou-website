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

    <section id="profilesAll">
        <h2>Profiles</h2>
        <div class="profileWrapper">
            @foreach($profiles as $profile)
                <div class="profileCard">
                    <a href="/profile/{{ $profile->id }}">
                        <img src="{{ asset('storage/' . $profile->profile_picture_path) }}" alt="">
                        <span>{{ $profile->username }}</span>
                    </a>
                </div>
            @endforeach
        </div>
    </section>

    <section id="coursesAll">
        <h2>Courses</h2>
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

@endsection
