@extends('layouts.default')
@section('head')

@endsection
@section('title', 'Dashboard')

@section('content')

    <section id="navLinkTree">
        <nav>
            <h1>Dashboard</h1>
            <div class="linkTree">
                <a href="/">Home / </a>
                <a href="">Dashboard </a>
            </div>
        </nav>
    </section>

    <section id="dashboard">
        <section id="reports">
            <div class="c">
                <h1>Reports:</h1>
                @if($reports->isEmpty())
                    <div class="noResults">
                        No Reports found
                    </div>
                @else
                    <ul>
                        @foreach($reports as $index => $report)
                            <li>
                                <span>{{ $index + 1 }}</span>
                                <div class="title">
                                    <h2>{{ $report->reason }}</h2>
                                </div>
                                <button class="btn" onclick="window.location.href = '{{ url('report/' . $report->id ) }}';">
                                    View
                                </button>
                                <form action="{{'/deleteReport/' . $report->id }}" method="post">
                                    @csrf
                                    <button class="btn danger">
                                        Delete
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </section>

        <section id="reportsQuick">
            <div class="c">
                <h1>QuickReports:</h1>
                @if($reportsQuick->isEmpty())
                    <div class="noResults">
                        No Reports found
                    </div>
                @else
                    <ul>
                        @foreach($reportsQuick as $index => $report)
                            <li>
                                <span>{{ $index + 1 }}</span>
                                <div class="title">
                                    <h2>{{ $report->title }}</h2>
                                </div>
                                <button class="btn" onclick="window.location.href = '{{ url('/course/' . $report->course_id ) }}';">
                                    View
                                </button>
                                <form action="{{'/deleteReportQuick/' . $report->id }}" method="post">
                                    @csrf
                                    <button class="btn danger">
                                        Delete
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </section>
    </section>

@endsection

@section('scripts')

@endsection
