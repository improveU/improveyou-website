@extends('layouts.default')

@section('title', $profile->username )

@section('head')

@endsection

@section('content')

<section id="publicProfile">
    <div class="c teal">
        <div class="publicProfileCard">
            <div class="head">
                <img src="{{ asset('storage/' . $profile->profile_picture_path) }}" alt="">
                <div class="person">
                    {{ $profile->username }}<br>
                    <span>{{ $profile->email }}</span>
                </div>
            </div>
            @if($profile->description == null)
            <div class="description"> No description yet</div>
            @else
            <div class="description">{!! $description !!}</div>
            @endif
        </div>
    </div>
</section>

@if ($courses->count() > 0)
<section id="profileCourses">
    <div class="c">
        <div class="coursesContainer">
            <ul>
                @foreach($courses as $index => $course)
                    <li>
                        <span>{{ $index + 1 }}</span>
                        <img src="{{ asset('storage/' . $course->image_thumbnail_path) }}" alt="">
                        <div class="title">
                            <h2>{{ $course->title }}</h2>
                        </div>
                        <div class="introduction">
                            <p>{{ $course->introduction }}</p>
                        </div>
                        <div class="date">
                            <p>Created: <br> {{ $course->updated_at->format('Y-m-d') }}</p>
                        </div>
                        <button class="btn" onclick="window.location.href = '{{ url('course/' . $course->id )  }}';">View</button>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
@endif

@endsection
