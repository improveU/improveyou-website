<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >

    @yield('head')

    <title>Error: @yield('code')</title>
</head>
    <body class="antialiased">
    <div>
        <a href="/" class="logo-link">
            <x-logo/>
        </a>
    </div>
        <div class="text"><p>@yield('code')</p></div>
        <div class="container">
            <!-- caveman left -->
            <div class="caveman">
                <div class="leg">
                    <div class="foot"><div class="fingers"></div></div>
                </div>
                <div class="leg">
                    <div class="foot"><div class="fingers"></div></div>
                </div>
                <div class="shape">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
                <div class="head">
                    <div class="eye"><div class="nose"></div></div>
                    <div class="mouth"></div>
                </div>
                <div class="arm-right"><div class="club"></div></div>
            </div>
            <!-- caveman right -->
            <div class="caveman">
                <div class="leg">
                    <div class="foot"><div class="fingers"></div></div>
                </div>
                <div class="leg">
                    <div class="foot"><div class="fingers"></div></div>
                </div>
                <div class="shape">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
                <div class="head">
                    <div class="eye"><div class="nose"></div></div>
                    <div class="mouth"></div>
                </div>
                <div class="arm-right"><div class="club"></div></div>
            </div>
        </div>
        <div id="link">
            <i class="fab fa-codepen"></i>
            <p>@yield('message') |</p> <a href="/" class="footer-link">| Im.ProveYou</a>
        </div>
    </body>
</html>
