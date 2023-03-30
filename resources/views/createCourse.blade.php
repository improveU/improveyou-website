@extends('layouts.default')

@section('head')
    <script src="{{ asset('js/toastui-improved.js') }}"></script>
    <script src="{{ asset('js/formSend.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/toastui-editor-improved.css') }}"/>
@endsection

@section('title', 'Create')

@section('content')

    <form method="POST" class="formWrapper create" action="{{ url('create') }}" enctype="multipart/form-data">
        @csrf

        <input type="hidden" name="description" value="">

        <div class="c">
            <h2>Title</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="email">Email</label>
                <input class="inputField @error('title') is-invalid @enderror"
                       type="text"
                       name="title"
                       value="{{ old('title') }}"
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
                <label class="inputLabel" for="file-input">Thumbnail</label>
                <div class="file-drop-area">
                    <div class="cover-svg">
                        <img src="{{ asset('svg/logoUploadFile.svg') }}">
                    </div>
                    <span class="fake-btn"> <strong> Upload files </strong> </span>
                    <span class="file-msg">or drag and drop files here</span>
                    <input class="file-input" type="file" name="thumbnail" @error('thumbnail') is-invalid @enderror>
                </div>
                @error('thumbnail')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="c">
            <h2>Introduction</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="textarea">Introduction</label>
                <input class="inputField @error('intro') is-invalid @enderror"
                       type="text"
                       name="intro"
                       value="{{ old('intro') }}"
                       required
                       autofocus
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
            <div id="editor"></div>
            <div>
                <button class="btn" type="submit">Send</button>
                <button class="btn discard" type="submit">Discard</button>
            </div>
        </div>
    </form>

                <button class="btn" onclick="testing()" >Login</button>

@endsection

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
    <script>
        const Editor = toastui.Editor;

        const editor = new Editor({
            el: document.querySelector('#editor'),
            height: 'auto',
            initialValue: '',
            initialEditType: 'wysiwyg',
            previewStyle: 'vertical'
        });

        editor.getMarkdown();

    </script>
    <script src="{{ asset('js/upload.js') }}"></script>
@endsection
