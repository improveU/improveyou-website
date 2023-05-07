<section id="profileCourses" class="hidden">
    <h1>Courses</h1>
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
                    <button class="btn"
                            onclick="window.location.href = '{{ url('editCourse/' . auth()->user()->id . "/" . $course->id )  }}';">
                        Edit
                    </button>
                </li>
            @endforeach
        </ul>
    </div>
</section>
