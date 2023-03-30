@extends('layouts.default')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/toastui-editor-improved.css') }}"/>
@endsection

@section('title', 'Contact')

@section('content')

    <div>
        <h1>Contact Us</h1>
        <img src="{{URL::asset('img/ContactUsMainPic.webp')}}" alt="ContactUsMainPic" class="phoneImg">
    </div>

    <form method="POST" class="formWrapper create" action="{{ route('login') }}">
        @csrf

        <div class="c">
            <h2>Name</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="email">Email</label>
                <input class="inputField @error('email') is-invalid @enderror"
                       type="email"
                       name="email"
                       value="{{ old('email') }}"
                       autocomplete="email"
                       required
                       autofocus
                >
                @error('email')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="c">
            <h2>Email</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="email">Email</label>
                <input class="inputField @error('email') is-invalid @enderror"
                       type="email"
                       name="email"
                       value="{{ old('email') }}"
                       autocomplete="email"
                       required
                       autofocus
                >
                @error('email')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="c">
            <h2>Reason</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="email">Reason</label>
                <input class="inputField @error('email') is-invalid @enderror"
                       type="email"
                       name="email"
                       value="{{ old('email') }}"
                       autocomplete="email"
                       required
                       autofocus
                >
                @error('email')
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
                <button class="btn" type="submit">Login</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
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
@endsection
