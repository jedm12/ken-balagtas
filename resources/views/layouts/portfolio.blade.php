<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('portfolio.name') }} — {{ config('portfolio.title') }}. {{ config('portfolio.tagline') }}">

    <title>{{ config('portfolio.name') }} — {{ config('portfolio.title') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('sections.nav')

    <main>
        @yield('content')
    </main>

    @include('sections.footer')
</body>
</html>
