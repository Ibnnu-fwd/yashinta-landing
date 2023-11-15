<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/plus-jakarta-sans" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    @include('layouts.navbar')
    @include('layouts.sidebar')
    <div class="p-4 sm:ml-64 mt-4 overflow-y-auto">
        <div class="p-4 rounded-lg mt-14 text-sm">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
