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

    sections: <br><br>
    ----------- <br>
    Most views? <br>
    ----------- <br>
    New?(dates) <br>
    ----------- <br>
    Random? <br>
    ----------- <br>
    All <br>
    ----------- <br>
    <section id="coursesAll">

    </section>
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
@endsection
