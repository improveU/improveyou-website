@extends('layouts.default')

@section('title', 'Profile')

@section('head')
    <script src="{{ asset('js/profilePictureUpload.js') }}" defer></script>
@endsection

@section('content')

<section id="profileCover">
    <div class="c orange">
        <div class="profilePictureWrapper">
            <img src="{{ asset('storage/' . $user->profile_picture_path) }}" alt="ProfilePic">
            <div class="profilePictureEdit" id="profilePictureUploadOpen">
                <img src="{{ asset('svg/logoEdit.svg') }}" alt="">
            </div>
        </div>
        <H1>Hello, {{ auth()->user()->username }}</H1>
    </div>
</section>

<div class="overview-section">
    <div class="overview-left">
        <h1>Profile</h1>
        <p>Menu</p>
        <ul>
            <li><a href="/profile/settings">Settings</a></li>
            <li><a href="/profile/courses">Courses</a></li>
            <li><a href="/profile/subscriptions">Subscriptions</a></li>
        </ul>
        <form method="POST" action="{{ url('/logout') }}">
            @csrf
            <button type="submit" class="btn danger">Log Out</button>
        </form>
    </div>

    <x-profile.profileCourses/>
    <x-profile.profileSettings/>
    <x-profile.profileSubscriptions/>
</div>
<section id="profilePictureUpload">
    <form method="POST" class="formWrapper create" id="formSending" action="/updateProfilePicture"
          enctype="multipart/form-data">
        @csrf

        <div class="c">
            <h2>Profile picture</h2>
            <div class="inputContainer">
                <label class="inputLabel" for="profilePicture">Upload your profile picture below</label>
                <div class="file-drop-area">
                    <div class="cover-svg">
                        <img src="{{ asset('svg/logoUploadFile.svg') }}" alt="">
                    </div>
                    <span class="fake-btn"> <strong> Upload files </strong> </span>
                    <span class="file-msg">or drag and drop files here</span>
                    <input type="file" name="profilePicture"
                           class="file-input @error('profilePicture') is-invalid @enderror">
                </div>
                @error('profilePicture')
                <span class="invalidFeedback" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="submitContainerRight">
                <button class="btn" type="submit">Send</button>
            </div>
            <div class="formClose" id="profilePictureUploadClose">
                <img src="{{ asset('svg/logoClose.svg') }}" alt="">
            </div>
        </div>
    </form>
</section>
@endsection

@section('scripts')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{ asset('js/upload.js') }}"></script>
@endsection
