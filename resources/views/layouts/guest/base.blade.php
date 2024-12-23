
<!doctype html>
<html lang="pt">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="shortcut icon" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icons/favicon-16x16.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('icons/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('icons/favicon-192x192.png')}}">
    {{--Aple--}}
    <link rel="apple-touch-icon"  href="{{asset('icons/apple-touch-icon.png')}}">

    <link rel="manifest" href="{{asset('icons/site.webmanifest')}}">

    <title>Mediateca</title>
    <!-- CSS files -->
    @vite(['resources/sass/guest.scss'])
</head>
<body>
<main class="main" id="top">


    @include('layouts.guest.parts.menu')
    @yield('content')

</main>
<!-- Libs JS -->
@vite(['resources/js/guest.js'])
</body>
</html>
