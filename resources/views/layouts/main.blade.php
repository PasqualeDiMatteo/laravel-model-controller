<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies | @yield('title')</title>
    <style>
        body {
            display: none
        }
    </style>
    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    {{-- Header --}}
    <header>
        @include('includes.header')
    </header>

    {{-- Main --}}
    <main>
        @yield('main')
    </main>

</body>

</html>
