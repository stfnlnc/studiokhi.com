<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <link rel="icon" type="image/svg" href="/favicon.svg">
    <meta property="og:title" content="@yield('title', 'Création de sites web et identités visuelles') - {{ config('app.name') }}">
    <meta property="og:description"
          content="Nous créons des sites et des designs pour des marques et des entrepreneurs qui souhaitent se démarquer sur le web.">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <title>@yield('title', 'Création de sites web et identités visuelles') - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<header>
    <nav
        class="fixed top-0 left-0 z-20 flex w-full flex-row items-center justify-between px-4 py-8 mix-blend-difference invert lg:px-8 xl:px-16">
        <a aria-label="Studio Khi" class="link-loader" href="{{ route('app.index') }}">
            <x-logo.inline class="w-40 fill-sk-dark 2xl:w-[10vw]"/>
        </a>
        @php
            $route = request()->route()->getName();
        @endphp

        <div class="hidden flex-row gap-10 lg:flex">
            <x-nav.link id="dropdown-link" :current="str_contains($route, 'app.service.')" mode="dark" underline>Services</x-nav.link>
            <x-nav.link class="link-loader" :current="$route === 'app.work'" :href="route('app.work')" mode="dark"
                        underline>Réalisations
            </x-nav.link>
            <x-nav.link class="link-loader" :current="$route === 'app.faq'" :href="route('app.faq')" mode="dark" underline>FAQ
            </x-nav.link>
            <x-nav.link class="link-loader" :current="$route === 'app.studio'" :href="route('app.studio')" mode="dark" underline>Studio
            </x-nav.link>
            <x-nav.link class="link-loader" :current="$route === 'app.posts'" :href="route('app.posts')" mode="dark" underline>Articles
            </x-nav.link>
        </div>
        <x-button.primary class="hidden link-loader lg:flex" :href="route('app.contact')" mode="light"
                          icon>Contact
        </x-button.primary>
        <x-nav.mobile id="dropdown-menu-mobile"></x-nav.mobile>
    </nav>
    <x-nav.dropdown id="dropdown"/>
    <x-nav.dropdown-mobile id="dropdown-mobile" :route="$route"/>
    <x-nav.loader id="loader"/>
    <x-nav.preloader id="preloader"/>
</header>
<main>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield('content')
            @if (!request()->route()->named('app.contact'))
                <footer
                    class="relative z-0 flex w-full flex-col justify-end pt-24 pb-8 footer bg-sk-dark text-sk-light lg:h-[100lvh] lg:-mt-[100lvh]">
                    <div
                        class="flex flex-row items-start justify-between border-b px-4 pb-20 border-sk-grey lg:px-8 xl:px-16">
                        <div class="flex flex-col gap-16">
                            <div class="h2">Nous avons hâte <br>d'écouter votre projet</div>
                            <div class="flex flex-col gap-4 lg:flex-row">
                                <x-button.primary :href="config('app.calendly')" mode="light" icon>Réservez votre appel
                                    découverte
                                </x-button.primary>
                                <x-button.primary href="mailto:hello@studiokhi.com" mode="dark" icon>Contactez-nous par mail</x-button.primary>
                            </div>
                        </div>
                        <x-logo.square class="hidden w-48 fill-sk-light lg:block"/>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-8 border-b px-4 py-8 border-sk-grey lg:grid-cols-5 lg:px-8 xl:px-16">
                        <div class="flex flex-col">
                            <p class="mb-4 text-sk-grey text-body-sm">
                                Le Studio
                            </p>
                            <x-nav.link :href="route('app.index')" class="text-body-sm" mode="light">Home</x-nav.link>
                            <x-nav.link :href="route('app.work')" class="text-body-sm"
                                        mode="light">Réalisations
                            </x-nav.link>
                            <x-nav.link :href="route('app.studio')" class="text-body-sm" mode="light">À Propos</x-nav.link>
                        </div>
                        <div class="flex flex-col">
                            <p class="mb-4 text-sk-grey text-body-sm">
                                Services
                            </p>
                            <x-nav.link :href="route('app.service.branding')" class="text-body-sm" mode="light">Branding</x-nav.link>
                            <x-nav.link :href="route('app.service.webdesign')" class="text-body-sm"
                                        mode="light">Webdesign
                            </x-nav.link>
                            <x-nav.link :href="route('app.service.website')" class="text-body-sm" mode="light">Développement
                                Web
                            </x-nav.link>
                        </div>
                        <div class="flex flex-col">
                            <p class="mb-4 text-sk-grey text-body-sm">
                                Questions
                            </p>
                            <x-nav.link :href="route('app.posts')" class="text-body-sm" mode="light">Articles &
                                Blog
                            </x-nav.link>
                            <x-nav.link :href="route('app.faq')" class="text-body-sm" mode="light">FAQ</x-nav.link>
                            <x-nav.link :href="route('app.price')" class="text-body-sm" mode="light">Tarifs</x-nav.link>
                            <x-nav.link :href="route('app.contact')" class="text-body-sm" mode="light">Contact</x-nav.link>
                        </div>
                        <div class="flex flex-col">
                            <p class="mb-4 text-sk-grey text-body-sm">
                                Socials
                            </p>
                            <x-nav.link target="_blank" href="https://www.instagram.com/studio_khi/"
                                        class="text-body-sm" mode="light">Instagram
                            </x-nav.link>
                            <x-nav.link target="_blank" href="https://www.linkedin.com/company/studio-khi"
                                        class="text-body-sm" mode="light">
                                Linkedin
                            </x-nav.link>
                            <x-nav.link target="_blank" href="https://www.behance.net/studiokhi"
                                        class="text-body-sm" mode="light">Behance
                            </x-nav.link>
                        </div>
                        <div>
                            <x-nav.link class="text-body-sm" href="#" mode="light" underline>Back to
                                Top
                            </x-nav.link>
                        </div>
                    </div>
                    <div
                        class="flex flex-col items-start justify-between gap-4 px-4 pt-8 lg:flex-row lg:px-8 xl:px-16">
                        <a href="" class="text-body-sm text-sk-grey">© 2024 Studio Khi. All rights
                            reserved</a>
                        <div class="flex flex-col gap-4 lg:flex-row">
                            <a href="{{ route('app.policy.privacy_policy') }}"
                               class="text-body-sm text-sk-grey">Politique de confidentialité</a>
                            <a href="{{ route('app.policy.term_of_use') }}"
                               class="text-body-sm text-sk-grey">Mentions légales</a>
                            <a href="{{ route('app.policy.cookies') }}"
                               class="text-body-sm text-sk-grey">Cookies</a>
                        </div>
                    </div>
                </footer>
            @endif
        </div>
    </div>
</main>

</body>

</html>
