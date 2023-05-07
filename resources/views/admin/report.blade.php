@extends('layouts.default')
@section('head')

@endsection
@section('title', 'Report')

@section('content')

    <section id="navLinkTree">
        <nav>
            <h1>{{ $report->reason }}</h1>
            <div class="linkTree">
                <a href="/">Home / </a>
                <a href="/dashboard">Dashboard / </a>
                <a href="/dashboard"> {{ $report->reason }} </a>
            </div>
        </nav>
    </section>
    <section id="reportOverview">
        <div class="c">
            <div>
                <h1>Name</h1>
                {!! $report->name !!}}
                <br>
            </div>
            <div>
                <h1>Mail</h1>
                {!! $report->email !!}}
                <br>
            </div>
            <div>
                <h1>Report created</h1>
                {!! $report->created_at->format('Y-m-d') !!}
                <br>
            </div>
            <h1>Description</h1>
            {!! $report->description !!}
        </div>
    </section>

@endsection

@section('scripts')

@endsection
