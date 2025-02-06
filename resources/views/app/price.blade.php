@extends('base')
@section('title', 'Infos & Tarifs')
@section('description', 'Retrouvez les tarifs pour toutes nos prestations ici.')

@vite(['resources/js/filter.js', 'resources/js/filter-pricing.js'])

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-12 lg:gap-20 px-4 pt-36 pb-12 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <h1>Nos tarifs</h1>
    </section>
    <section
        class="relative z-10 flex w-full flex-row justify-center flex-wrap gap-8 px-4 py-8 lg:py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <x-button.filter id="website"
                         class="filter shrink-0 bg-sk-dark text-sk-light">Site Web
        </x-button.filter>
        <x-button.filter id="branding"
                         class="filter shrink-0">Branding
        </x-button.filter>
    </section>
    <section class="relative z-10 flex w-full flex-col gap-4 px-4 py-24 bg-sk-light  lg:px-8 xl:px-16">
        <div class="flex flex-col w-full text-left text-body-sm website-show show-item">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 md:gap-16 py-5  border-b border-sk-light-grey">
                <div class="pricing-web-filter h3 cursor-pointer hover:text-sk-dark transition-colors duration-300">One Page <br> Standard</div>
                <div class="pricing-web-filter h3 cursor-pointer text-sk-light-grey hover:text-sk-dark transition-colors duration-300">One Page <br> Immersive</div>
                <div class="pricing-web-filter h3 cursor-pointer text-sk-light-grey hover:text-sk-dark transition-colors duration-300">Site <br> Standard</div>
                <div class="pricing-web-filter h3 cursor-pointer text-sk-light-grey hover:text-sk-dark transition-colors duration-300">Site <br> Immersif</div>
            </div>
            <div class="relative w-full h-full">
                <div class="flex flex-col pricing-web">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 py-5">
                        <div class="text-body-sm md:col-span-2">Site d’une seule page avec interactions simples</div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">4 semaines</div>
                        </div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">3 500€ ht</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 border-t border-sk-light-grey py-5">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels
                        </div>
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">En supplément</span> <br>
                            Branding <br>
                            Social Content <br>
                            Photo & Vidéo <br>
                            Illustrations <br>
                            3D
                        </div>
                    </div>
                </div>
                <div class="flex flex-col pricing-web absolute top-0 left-0 w-full h-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 py-5">
                        <div class="text-body-sm md:col-span-2">Site d’une seule page avec animations avancées</div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">6 semaines</div>
                        </div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">5 500€ ht</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 border-t border-sk-light-grey py-5">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels
                        </div>
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">En supplément</span> <br>
                            Branding <br>
                            Social Content <br>
                            Photo & Vidéo <br>
                            Illustrations <br>
                            3D
                        </div>
                    </div>
                </div>
                <div class="flex flex-col pricing-web absolute top-0 left-0 w-full h-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 py-5">
                        <div class="text-body-sm md:col-span-2">Site vitrine d’environ 5 pages avec interactions simples</div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">8 semaines</div>
                        </div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">6 000€ ht</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 border-t border-sk-light-grey py-5">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels
                        </div>
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">En supplément</span> <br>
                            Branding <br>
                            Social Content <br>
                            Photo & Vidéo <br>
                            Illustrations <br>
                            3D
                        </div>
                    </div>
                </div>
                <div class="flex flex-col pricing-web absolute top-0 left-0 w-full h-full">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 py-5">
                        <div class="text-body-sm md:col-span-2">Site vitrine d’environ 5 pages avec animations avancées</div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">12 semaines</div>
                        </div>
                        <div class="border border-sk-light-grey rounded-2xl p-5 flex flex-col gap-1">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">8 500€ ht</div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-16 border-t border-sk-light-grey py-5">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels
                        </div>
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">En supplément</span> <br>
                            Branding <br>
                            Social Content <br>
                            Photo & Vidéo <br>
                            Illustrations <br>
                            3D
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden flex-col w-full text-center text-body-sm branding-show show-item">
            Branding
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-full lg:w-2/5 text-body-sm">
            Votre devis sur mesure
        </p>
        <div class="flex w-full flex-col gap-14 lg:w-3/5">
            <div class="text-body-sm text-sk-grey">
                <p>
                    * Bien que nous proposions une grille tarifaire de départ pour nos services, il est important de noter que chaque projet est
                    unique et peut nécessiter des besoins spécifiques. Nos tarifs de départ fournissent une estimation générale, mais pour obtenir un
                    devis précis et adapté à votre projet, nous vous invitons à nous contacter directement.
                </p>
            </div>
        </div>
    </section>
    @include('app.partials.cta', [
        'title' => 'Vous souhaitez recevoir un devis sur-mesure ?',
        'description' => 'Réservez votre appel découverte',
        'color' => 'beige',
        'href' => ''
    ])
@endsection
