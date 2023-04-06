<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >

    @yield('head')

    <title>@yield('title')</title>
</head>

<body>
    
<x-header/>
<div class="errorTitel">"Error"</div>
<div class="underTitel">Something went Wrong</div>
    @yield('content')
<x-footer/>
    
</body>

</html>