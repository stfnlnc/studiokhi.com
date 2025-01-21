@extends('base')
@section('title', 'Infos & Tarifs')
@section('description', 'Retrouvez les tarifs pour toutes nos prestations ici.')

@vite(['resources/js/filter.js'])

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-12 lg:gap-20 px-4 pt-36 pb-12 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <h1>Nos tarifs</h1>
    </section>
    <section
        class="relative z-10 flex w-full flex-row justify-center flex-wrap gap-8 px-4 py-8 lg:py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <x-button.filter id="website"
                         class="filter shrink-0 bg-sk-dark text-sk-light">Webdesign & Développement
        </x-button.filter>
        <x-button.filter id="branding"
                         class="filter shrink-0">Branding & Logo
        </x-button.filter>
    </section>
    <section class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:px-8 xl:px-16">
        <div class="flex flex-col w-full text-center text-body-sm website-show show-item">
            <div class="grid lg:grid-cols-4 grid-cols-3 w-full text-center text-body-sm py-8 border-b border-sk-light-grey">
                <div class="lg:block hidden mt-auto text-sk-grey text-left">* Sur la base d'un site web de 5 pages</div>
                <div class="flex flex-col">
                    <span class="h5 lg:h3">Basic</span>
                    <span>à partir de 3400 €*</span>
                </div>
                <div class="flex flex-col">
                    <span class="h5 lg:h3">Avancé</span>
                    <span>à partir de 5100 €*</span>
                </div>
                <div class="flex flex-col">
                    <span class="h5 lg:h3">Expert</span>
                    <span>à partir de 6700 €*</span>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Complexité du design</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Complexité du design</div>
                <div>Simple</div>
                <div>Moyenne</div>
                <div>Haute</div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Complexité des animations</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Complexité des animations</div>
                <div>Simple</div>
                <div>Moyenne</div>
                <div>Haute</div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">UX/UI Design</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">UX/UI Design</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Responsive</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Responsive</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">SEO & Optimisation</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">SEO & Optimisation</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Support & Formation</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Support & Formation</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">E-Commerce</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">E-Commerce</div>
                <div>+ 3000 €</div>
                <div>+ 3000 €</div>
                <div>+ 3000 €</div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Maintenance</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Maintenance</div>
                <div>En option</div>
                <div>En option</div>
                <div>En option</div>
            </div>
        </div>
        <div class="hidden flex-col w-full text-center text-body-sm branding-show show-item">
            <div class="grid lg:grid-cols-4 grid-cols-3 w-full text-center text-body-sm py-8 border-b border-sk-light-grey">
                <div class="lg:block hidden"></div>
                <div class="flex flex-col">
                    <span class="h5 lg:h3">Starter</span>
                    <span>à partir de 1200 €*</span>
                </div>
                <div class="flex flex-col">
                    <span class="h5 lg:h3">Avancé</span>
                    <span>à partir de 2000 €*</span>
                </div>
                <div class="flex flex-col">
                    <span class="h5 lg:h3">Expert</span>
                    <span>à partir de 3500 €*</span>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Brainstorming & Workshop</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Brainstorming & Workshop</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Moodboards</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Moodboards</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Logo Concepts et Retours</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Logo Concepts et Retours</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Formats PNG, EPS, SVG</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Formats PNG, EPS, SVG</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Palette de Couleurs</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Palette de Couleurs</div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Charte graphique</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Charte graphique</div>
                <div>1 page</div>
                <div>15-20 pages</div>
                <div>30-40 pages</div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Carte de visite</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Carte de visite</div>
                <div class="flex flex-row justify-center items-center">
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Template Réseaux Sociaux</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Template Réseaux Sociaux</div>
                <div class="flex flex-row justify-center items-center">
                </div>
                <div class="flex flex-row justify-center items-center">
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
            <div class="lg:hidden flex text-left w-full py-4 border-b border-sk-light-grey">Pitchdeck</div>
            <div class="grid grid-cols-3 lg:grid-cols-4 w-full text-center text-body-sm py-4 border-b border-sk-light-grey">
                <div class="text-left lg:block hidden">Pitchdeck</div>
                <div class="flex flex-row justify-center items-center">
                </div>
                <div class="flex flex-row justify-center items-center">
                </div>
                <div class="flex flex-row justify-center items-center">
                    <div class="w-4 h-4 rounded-full bg-sk-dark"></div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-full lg:w-2/5 text-body-lg">
            Votre devis sur mesure
        </p>
        <div class="flex w-full flex-col gap-14 lg:w-3/5">
            <div class="text-body-base text-sk-grey">
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
