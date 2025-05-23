@extends('base')
@section('title', 'Infos & Tarifs')
@section('description', 'Retrouvez les tarifs pour toutes nos prestations ici.')

@vite(['resources/js/filter-pricing.js'])

@section('content')
    <section
        class="relative z-10 flex flex-col w-full gap-12 px-4 pb-12 border-b lg:gap-20 pt-36 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-sk-light-grey">
        <h1>Nos tarifs</h1>
    </section>
    <section
        class="relative z-10 flex flex-row flex-wrap justify-center w-full gap-8 px-4 py-8 border-b lg:py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-sk-light-grey">
        <x-button.filter id="web-pricing" class="filter shrink-0 bg-sk-dark text-sk-light">Site Web
        </x-button.filter>
        <x-button.filter id="branding-pricing" class="filter shrink-0">Branding
        </x-button.filter>
    </section>
    <section class="relative z-10 flex flex-col w-full gap-4 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col w-full text-left text-body-sm web-pricing-show show-item">
            <div class="grid grid-cols-1 gap-4 py-5 border-b md:grid-cols-2 xl:grid-cols-4 md:gap-16 border-sk-light-grey">
                <div
                    class="transition-colors duration-300 cursor-pointer pricing-web-filter h3 text-sk-light-grey hover:text-sk-dark">
                    One Page <br> Standard</div>
                <div
                    class="transition-colors duration-300 cursor-pointer pricing-web-filter h3 text-sk-light-grey hover:text-sk-dark">
                    One Page <br> Immersive</div>
                <div class="transition-colors duration-300 cursor-pointer pricing-web-filter h3 hover:text-sk-dark">Site
                    <br> Standard
                </div>
                <div
                    class="transition-colors duration-300 cursor-pointer pricing-web-filter h3 text-sk-light-grey hover:text-sk-dark">
                    Site <br> Immersif</div>
            </div>
            <div class="relative w-full h-full">
                <div class="flex flex-col pricing-web">
                    <div class="grid grid-cols-1 gap-4 py-5 md:grid-cols-2 xl:grid-cols-4 md:gap-16">
                        <div class="text-body-sm md:col-span-2">Site d’une seule page avec interactions simples</div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">4 semaines</div>
                        </div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">3 500€ ht</div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-4 py-5 border-t md:grid-cols-2 xl:grid-cols-4 md:gap-16 border-sk-light-grey">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels <br>
                            Support & Maintenance
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
                <div class="absolute top-0 left-0 flex flex-col w-full h-full pricing-web">
                    <div class="grid grid-cols-1 gap-4 py-5 md:grid-cols-2 xl:grid-cols-4 md:gap-16">
                        <div class="text-body-sm md:col-span-2">Site d’une seule page avec animations avancées</div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">6 semaines</div>
                        </div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">5 500€ ht</div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-4 py-5 border-t md:grid-cols-2 xl:grid-cols-4 md:gap-16 border-sk-light-grey">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels <br>
                            Support & Maintenance
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
                <div class="absolute top-0 left-0 flex flex-col w-full h-full pricing-web">
                    <div class="grid grid-cols-1 gap-4 py-5 md:grid-cols-2 xl:grid-cols-4 md:gap-16">
                        <div class="text-body-sm md:col-span-2">Site vitrine d’environ 5 pages avec interactions simples
                        </div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">8 semaines</div>
                        </div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">6 000€ ht</div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-4 py-5 border-t md:grid-cols-2 xl:grid-cols-4 md:gap-16 border-sk-light-grey">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels <br>
                            Support & Maintenance
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
                <div class="absolute top-0 left-0 flex flex-col w-full h-full pricing-web">
                    <div class="grid grid-cols-1 gap-4 py-5 md:grid-cols-2 xl:grid-cols-4 md:gap-16">
                        <div class="text-body-sm md:col-span-2">Site vitrine d’environ 5 pages avec animations avancées
                        </div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">Durée</div>
                            <div class="text-body-lg">12 semaines</div>
                        </div>
                        <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                            <div class="text-body-sm text-sk-grey">À partir de</div>
                            <div class="text-body-lg">8 500€ ht</div>
                        </div>
                    </div>
                    <div
                        class="grid grid-cols-1 gap-4 py-5 border-t md:grid-cols-2 xl:grid-cols-4 md:gap-16 border-sk-light-grey">
                        <div class="text-body-sm text-sk-grey">
                            <span class="text-sk-dark">Inclus</span> <br>
                            Stratégie de Marque <br>
                            Copywriting & SEO <br>
                            Architecture & Wireframing (UX) <br>
                            Digital Design (UI) <br>
                            Développement <br>
                            Dashboard Intuitif <br>
                            Formation & Tutoriels <br>
                            Support & Maintenance
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
        <div
            class="absolute top-0 left-0 flex flex-col w-full h-full px-4 pt-24 text-left text-body-sm branding-pricing-show show-item lg:px-8 xl:px-16">
            <div class="flex flex-col">
                <div class="grid grid-cols-1 gap-4 py-5 md:grid-cols-2 xl:grid-cols-4 md:gap-16">
                    <div class="text-body-sm md:col-span-2">Création d’une identité visuelle complète</div>
                    <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                        <div class="text-body-sm text-sk-grey">Durée</div>
                        <div class="text-body-lg">8 semaines</div>
                    </div>
                    <div class="flex flex-col gap-1 p-5 border border-sk-light-grey rounded-2xl">
                        <div class="text-body-sm text-sk-grey">À partir de</div>
                        <div class="text-body-lg">3 500€ ht</div>
                    </div>
                </div>
                <div
                    class="grid grid-cols-1 gap-4 py-5 border-t md:grid-cols-2 xl:grid-cols-4 md:gap-16 border-sk-light-grey">
                    <div class="text-body-sm text-sk-grey">
                        <span class="text-sk-dark">Inclus</span> <br>
                        Stratégie de Marque <br>
                        Moodboards <br>
                        Concepts Graphiques (x2) <br>
                        Logo et Déclinaisons <br>
                        Palette de Couleurs <br>
                        Combinaison de Typographies <br>
                        Système graphique <br>
                        Charte Graphique <br>
                        Supports de Communication au Choix (x3) <br>
                        Livraison Formats Vectoriels et Standards
                    </div>
                    <div class="text-body-sm text-sk-grey">
                        <span class="text-sk-dark">En supplément</span> <br>
                        Naming <br>
                        Community Management <br>
                        Photo & Vidéo <br>
                        Illustrations <br>
                        3D
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="relative z-10 flex flex-col w-full gap-4 px-4 py-24 border-t bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-full lg:w-2/5 text-body-sm">
            Votre devis sur mesure
        </p>
        <div class="flex flex-col w-full gap-14 lg:w-3/5">
            <div class="text-body-sm text-sk-grey">
                <p>
                    * Bien que nous proposions une grille tarifaire de départ pour nos services, il est important de noter
                    que chaque projet est
                    unique et peut nécessiter des besoins spécifiques. Nos tarifs de départ fournissent une estimation
                    générale, mais pour obtenir un
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
