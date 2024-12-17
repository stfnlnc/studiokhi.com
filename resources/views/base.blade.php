<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="icon" type="image/svg" href="/favicon.svg">
    <title>@yield('title', 'Création de sites web et identités visuelles') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <nav
        class="fixed top-0 left-0 z-20 flex w-full flex-row items-center justify-between px-4 py-8 mix-blend-difference invert lg:px-8 xl:px-16">
        <a class="link-loader" href="{{ route('app.index') }}">
            <x-logo.inline class="2xl:w-[10vw] w-40 fill-sk-dark"/>
        </a>
        <div class="hidden flex-row gap-10 lg:flex">
            <x-nav.link id="dropdown-link" mode="dark" underline>Services</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.work')" mode="dark" underline>Réalisations</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.faq')" mode="dark" underline>FAQ</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.studio')" mode="dark" underline>Studio</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.posts')" mode="dark" underline>Articles</x-nav.link>
        </div>
        <x-button.primary class="hidden link-loader lg:flex" :href="route('app.contact')" mode="light" icon>Contact
        </x-button.primary>
    </nav>
    <x-nav.dropdown id="dropdown"/>
    <x-nav.loader id="loader"/>
    <x-nav.preloader id="preloader"/>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
