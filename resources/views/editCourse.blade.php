@extends('layouts.default')

@section('head')
    <script src="{{ asset('js/toastui-improved.js') }}"></script>
    <script src="{{ asset('js/formSend.js') }}" defer></script>
    <script src="{{ asset('js/formGet.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/toastui-editor-improved.css') }}"/>

@endsection

@section('title', 'Edit')

@section('content')

    <section id="navLinkTree">
        <nav>
            <h1>Edit: {{ $course->title }}</h1>
            <div class="linkTree">
                <a href="/">Home / </a>
                <a href="/profile">Profile / </a>
                <a href="">Edit Course / </a>
                <a href="">{{ $course->title }}</a>
            </div>
        </nav>
    </section>

    <form method="POST" class="formWrapper create" id="formSending" action="{{ '/edit-course/' . $course->id }}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="description" id="formTextarea" value="{{ $course->course_description }}">

        <div class="c">
            <h2>Title</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="title">Try to presesnt your media in one sentence</label>
                <input class="inputField @error('title') is-invalid @enderror"
                       type="text"
                       name="title"
                       value="{{ $course->title }}"
                       required
                       autofocus
                >
                @error('title')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="c">
            <h2>Thumbnail</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="thumbnail">An image that represents your media</label>
                <div class="file-drop-area">
                    <div class="cover-svg">
                        <img src="{{ asset('svg/logoUploadFile.svg') }}" alt="">
                    </div>
                    <span class="fake-btn"> <strong> Upload files </strong> </span>
                    <span class="file-msg">or drag and drop files here</span>
                    <input type="file" value="{{ $course->image_path }}" name="thumbnail" class="file-input @error('thumbnail') is-invalid @enderror">
                </div>
                @error('thumbnail')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        <div class="c">
            <h2>Tags</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="tags">Tags are separated by comma (,)</label>
                <input class="inputField @error('tags') is-invalid @enderror"
                       type="text"
                       name="tags"
                       value="
@foreach($course->tags as $tag)
{{ $tag->name . ", "}}
@endforeach"
                       required
                >
                @error('tags')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        <div class="c">
            <h2>Introduction</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="intro">Introduce the media and expand on what you put in the title. Max 200 words.</label>
                <input class="inputField @error('intro') is-invalid @enderror"
                       type="text"
                       name="intro"
                       value="{{ $course->introduction }}"
                       required
                >
                @error('intro')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>

        <div class="c">
            <h2>Description</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="editor">Describe the media and expand on what you put in the title. Minimum 200 words.</label>
                <div id="editor"></div>
            </div>
            <div class="submitContainerRight">
                <button class="btn" type="submit">Edit</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        const mdEditor = new toastui.Editor({
            el: document.querySelector('#editor'),
            height: '500px',
            initialValue: document.getElementById("formTextarea").value,
            initialEditType: 'wysiwyg',
            previewStyle: 'vertical'
        });
    </script>
    <script src="{{ asset('js/upload.js') }}"></script>
@endsection
