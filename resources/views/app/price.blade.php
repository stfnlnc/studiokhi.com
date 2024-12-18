@extends('base')
@section('title', 'Infos & Tarifs')

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-36 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <h1>Nos tarifs</h1>
    </section>
    <section class="relative z-10 flex w-full flex-row gap-20 px-4 py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">

    </section>
    <section class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">>

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
