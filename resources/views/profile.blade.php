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
                <li><a href="/profile/settings">Settings</a></li>
                <li><a href="/profile/courses">Courses</a></li>
                <li><a href="/profile/subscriptions">Subscriptions</a></li>
            </ul>
            <form method="POST" action="{{ url('/logout') }}">
                @csrf
                <button type="submit" class="btn danger" >Log Out</button>
            </form>
        </div>

        @if($param == 'settings')
            <x-profile.profileSettings/>
        @endif

        @if($param == 'courses')
            <x-profile.profileCourses/>
        @endif

        @if($param == 'subscriptions')
            <x-profile.profileSubscriptions/>
        @endif
    </div>
@endsection
