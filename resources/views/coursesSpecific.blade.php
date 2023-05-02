@extends('layouts.default')

@section('title', 'Courses')

@section('content')

    <section id="coursesOverview">
        <section id="coursesAll">
            <h2>{{$category}}</h2>
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
        {{$courses->links('pagination')}}
    </section>
@endsection
