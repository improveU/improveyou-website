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

    <form method="POST" class="formWrapper create" action="{{ url('contact') }}">
        @csrf

        <div class="c">
            <h2>Name</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="name">How shall we call you?</label>
                <input class="inputField @error('name') is-invalid @enderror"
                       type="text"
                       name="name"
                       value="{{ old('name') }}"
                       autocomplete="name"
                       required
                       autofocus
                >
                @error('name')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="c">
            <h2>Email</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="email">Use a valid email to which we can reply.</label>
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
                <label class="inputLabel" for="reason">What is an overhand term for your problem?</label>
                <input class="inputField @error('reason') is-invalid @enderror"
                       type="text"
                       name="reason"
                       value="{{ old('reason') }}"
                       autocomplete="reason"
                       required
                       autofocus
                >
                @error('reason')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
        </div>
        <div class="c">
            <h2>Description</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="editor">Describe the problem and expand on what you put in the reason field. Minimum 200 words.</label>
                <div id="editor"></div>
            </div>
            <div class="submitContainerRight">
                <button class="btn" type="submit">Send</button>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js"></script>
    <script>
        const editor = new toastui.Editor({
            el: document.querySelector('#editor'),
            height: '500px',
            initialValue: '',
            initialEditType: 'wysiwyg',
            previewStyle: 'vertical'
        });
    </script>
@endsection
