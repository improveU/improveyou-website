<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/statusMessage.js') }}"></script>

    @yield('head')

    <title>@yield('title')</title>
</head>

<body>

<x-flash/>

<div class="headloader"></div>
<section class="splitTwo">
    <div class="form">
        <div class="splitTwoWrapper">

            <a href="{{ url('/') }}">
                <x-logo/>
            </a>

            <h2 class="splitOneTitle">
                @yield('title')
            </h2>

            @yield('splitOne')

        </div>
    </div>
    <div class="picture">

        @yield('splitTwo')

    </div>
</section>
</body>

</html>
