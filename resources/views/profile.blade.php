@extends('layouts.default')

@section('title', 'Profile')

@section('head')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>
@endsection

@section('content')
    <div class="banner-section c orange">
        <div class="content profileWrapper">
            <img src="" alt="ProfilePic">
        </div>
        <div class="content">
            <H1>Hello, {{auth()->user()->username}}</H1>
        </div>
    </div>

    <div class="overview-section">
        <div class="overview-left">
            <h1>Profile</h1>
            <p>Menu</p>
            <ul>
                <li><a href="">Settings</a></li>
                <li><a href="">Courses</a></li>
                <li><a href="">Subscriptions</a></li>
            </ul>
            <form method="POST" action="{{ url('/logout') }}">
                @csrf
                <button type="submit" class="btn danger" >Log Out</button>
            </form>
        </div>

        <div class="overview-right">
            <h1>Settings</h1>

            <form action="{{ url('/<<') }}" method="post" class="formWrapper">
                @csrf
                <div class="inputContainer">
                    <label for="username" class="inputLabel">Username</label>
                    <input type="text" name="username" id="username" class="inputField" value="{{Auth::user()->username}}">
                    @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="inputContainer">
                    <label for="first_name" class="inputLabel">Firstname</label>
                    <input type="text" name="first_name" id="first_name" class="inputField" value="{{Auth::user()->first_name}}">
                    @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="inputContainer">
                    <label for="last_name" class="inputLabel">Lastname</label>
                    <input type="text" name="last_name" id="last_name" class="inputField" value="{{Auth::user()->last_name}}">
                    @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="inputContainer">
                    <label for="email" class="inputLabel">E-mail</label>
                    <input type="email" name="email" id="email" class="inputField" value="{{Auth::user()->email}}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="submitContainer">
                    <button type="submit" class="btn full">
                        Update Profile
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
