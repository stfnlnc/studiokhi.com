<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/svg" href="/favicon.svg">
    <title>@yield('title', 'Création de sites web et identités visuelles') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<header>
    <nav
        class="xl:px-16 lg:px-8 px-4 py-8 flex flex-row items-center justify-between z-20 fixed top-0 left-0 w-full mix-blend-difference invert">
        <a class="link-loader" href="{{ route('app.index') }}">
            <x-logo.inline class="fill-sk-dark w-40"/>
        </a>
        <div class="hidden lg:flex flex-row gap-10">
            <x-nav.link id="dropdown-link" mode="dark" underline>Services</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.work')" mode="dark" underline>Réalisations</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.faq')" mode="dark" underline>FAQ</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.studio')" mode="dark" underline>Studio</x-nav.link>
            <x-nav.link class="link-loader" :href="route('app.posts')" mode="dark" underline>Articles</x-nav.link>
        </div>
        <x-button.primary class="hidden lg:flex link-loader" :href="route('app.contact')" mode="light" icon>Contact
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
