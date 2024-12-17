<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-zinc-900 antialiased">
<div class="flex min-h-screen flex-col items-center bg-zinc-100 pt-6 dark:bg-zinc-900 sm:justify-center sm:pt-0">
    <div>
        <a href="/">
            <x-application-logo class="h-20 w-20 fill-current text-zinc-500"/>
        </a>
    </div>

    <div class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md dark:bg-zinc-800 sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
</body>
</html>
