<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="{{ asset('js/search.js') }}" defer></script>
    <script src="{{ asset('js/statusMessage.js') }}"></script>
    <script src="{{ asset('js/backToTop.js') }}" defer></script>

    @yield('head')

    <title>@yield('title')</title>
</head>

<body id="body">

<x-flash/>

<x-header/>

    @yield('content')

<x-footer/>

@yield('scripts')

</body>

</html>
