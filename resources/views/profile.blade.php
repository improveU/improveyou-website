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
        </div>

        <div class="overview-right">
            <h1>Settings</h1>

            <div class="profile-left">
                <ul>
                    <li><p>Username: {{auth()->user()->username}}</p></li>
                    <li><p>Firstname: {{auth()->user()->first_name}}</p></li>
                    <li><p>Lastname: {{auth()->user()->last_name}}</p></li>
                    <li><p>E-Mail: {{auth()->user()->email}}</p></li>
                </ul>
            </div>

            <form method="POST" action="{{ url('/logout') }}">
                @csrf

                <button type="submit">Log Out</button>
            </form>
        </div>
    </div>
@endsection
