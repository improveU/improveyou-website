@extends('layouts.default')

@section('title', 'Profile')

@section('head')

    <script src="{{ asset('js/profileTabs.js') }}" defer></script>
    <script src="{{ asset('js/profilePayment.js') }}" defer></script>
    <script src="{{ asset('js/profilePictureUpload.js') }}" defer></script>
    <script src="{{ asset('js/toastui-improved.js') }}"></script>
    <script src="{{ asset('js/formSend.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('css/toastui-editor-improved.css') }}"/>

@endsection

@section('content')

    <section id="profileCover">
        <div class="c orange">
            <div class="profilePictureWrapper">
                <img src="{{ asset('storage/' . auth()->user()->profile_picture_path) }}" alt="ProfilePic">
                <div class="profilePictureEdit" id="profilePictureUploadOpen">
                    <img src="{{ asset('svg/logoEdit.svg') }}" alt="">
                </div>
            </div>
            <H1>Hello, {{ auth()->user()->username }}</H1>
        </div>
    </section>

    <section id="profileContainer">

        <section id="profileNav">
            <nav>
                <ul id="profileTabs">
                    <li onclick="handleTabClick(this)" class="tabOpen" data-section="profileOverview">Profile</li>
                    <li onclick="handleTabClick(this)" data-section="profileEdit">Edit</li>
                    <li onclick="handleTabClick(this)" data-section="profileSubscription">Subscription</li>
                    <li onclick="handleTabClick(this)" data-section="profileSubscriptionEdit">Change</li>
                    <li onclick="handleTabClick(this)" data-section="profileBilling">Billing</li>
                    <li onclick="handleTabClick(this)" data-section="profileBillingEdit">Edit</li>
                    <li onclick="handleTabClick(this)" data-section="profileDescription">Description</li>
                    <li onclick="handleTabClick(this)" data-section="profileDescriptionEdit">Edit</li>
                    @if(auth()->user()->subscription_id == 3)
                        <li onclick="handleTabClick(this)" data-section="profileCourses">Courses</li>
                    @endif
                </ul>

                <form method="POST" action="{{ url('/logout') }}">
                    @csrf
                    <button type="submit" class="btn danger">Log Out</button>
                </form>
            </nav>
        </section>

        <section id="profileTabs">
            <x-profile.profile/>
            <x-profile.profileEdit/>
            <x-profile.profileSubscription/>
            <x-profile.profileSubscriptionEdit/>
            <x-profile.profileBilling/>
            <x-profile.profileBillingEdit/>
            <x-profile.profileDescription :description="$description"/>
            <x-profile.profileDescriptionEdit/>

            @if(auth()->user()->subscription_id == 3)
                <x-profile.profileCourses :courses="$courses"/>
            @endif

        </section>

    </section>

    <section id="profileFix"></section>

    <section id="profilePictureUpload">
        <form method="POST" class="formWrapper create" action="/updateProfilePicture"
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

    <section id="profileCancelSubscription">
        <form method="POST" class="formWrapper create" action="/cancelSubscription">
            @csrf
            <div class="c">
                <h2>Confirmation</h2>
                <p>Do you really want to cancel your subscription?</p>
                <div class="submitContainerRight">
                    <button class="btn">
                        Yes
                    </button>
                </div>
                <div class="formClose" id="profileCancelSubscriptionClose">
                    <img src="{{ asset('svg/logoClose.svg') }}" alt="">
                </div>
            </div>
        </form>
    </section>

@endsection

@section('scripts')
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
