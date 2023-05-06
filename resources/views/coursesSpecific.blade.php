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
                                <h2>{{ $course->title }}</h2>
                                <div class="introduction">
                                    {{ $course->introduction }}
                                </div>
                                <div class="tags">
                                    @foreach($course->tags as $tag)
                                        <div> {{$tag->name}} </div>
                                    @endforeach
                                </div>
                                <div class="info">
                                    <div>{{ $course->views }} views</div>
                                    <div>{{ $course->created_at->format('Y-m-d') }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <section id="coursePages">
            {{$courses->links('pagination')}}
        </section>

    </section>
@endsection
