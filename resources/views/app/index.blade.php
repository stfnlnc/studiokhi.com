@extends('base')

@vite(['resources/js/page-index.js'])

@section('content')
    <section id="hero"
             class="relative z-0 xl:px-16 lg:px-8 px-4 w-full h-screen min-h-[700px] flex flex-col items-center justify-center">
        <div class="flex flex-col gap-8 items-center text-center">
            <x-button.primary mode="dark" icon>Réserver votre appel découverte</x-button.primary>
            <p class="text-body-base text-sk-grey w-1/2">Nous créons des sites et des designs pour des marques et des
                entrepreneurs
                qui souhaitent se démarquer sur le web.</p>
        </div>
        <x-logo.inline class="fill-sk-dark absolute bottom-0 left-0 w-full xl:px-16 lg:px-8 px-4"/>
    </section>
    <section
        class="xl:px-16 lg:px-8 px-4 py-24 z-10 relative w-full flex flex-row bg-sk-light border-t border-sk-light-grey">
        <p class="text-body-lg w-2/5">
            Notre approche
        </p>
        <div class="flex flex-col w-3/5 gap-14">
            <h3 class="w-4/5">On vous accompagne pour que vous ne ressembliez à personne.</h3>
            <div class="text-body-base text-sk-grey">
                <p>Chez Studio Khi, nous combinons stratégie digitale, design et développement web pour créer des
                    identités
                    de marque et des sites que l'on remarque.
                    <br><br>
                    Nous vous aidons à :
                </p>
                <ul>
                    <li>Définir votre positionnement</li>
                    <li>Créer une identité forte</li>
                    <li>Déployer un site orienté design</li>
                </ul>
            </div>
            <div class="flex flex-col gap-2">
                <x-button.secondary mode="dark" icon>Découvrir le studio</x-button.secondary>
                <x-button.secondary mode="dark" icon>Voir nos réalisations</x-button.secondary>
            </div>
        </div>
    </section>
    <section
        class="xl:px-16 lg:px-8 px-4 py-24 z-10 relative h-screen w-full bg-sk-green flex flex-col items-start justify-center gap-24">
        <h1>Branding & <br> Direction Artistique</h1>
        <div class="flex flex-col items-start justify-start self-end gap-12 w-3/5">
            <p class="text-body-base text-sk-grey">
                Du logo à un système graphique audacieux, nous élaborons ensemble une image qui vous ressemble pour
                renforcer votre présence en ligne.
            </p>
            <x-button.secondary mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
    <section
        class="xl:px-16 lg:px-8 px-4 py-24 z-10 relative h-screen w-full bg-sk-blue flex flex-col items-start justify-center gap-24">
        <h1>Webdesign & <br> Design Digital</h1>
        <div class="flex flex-col items-start justify-start self-end gap-12 w-3/5">
            <p class="text-body-base text-sk-grey">
                Nous sommes spécialisés dans la conception de sites web qui attirent et retiennent l'attention. Notre
                approche est de trouver le juste équilibre entre beauté et fonctionnalité.
            </p>
            <x-button.secondary mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
    <section
        class="xl:px-16 lg:px-8 px-4 py-24 z-10 relative h-screen w-full bg-sk-purple flex flex-col items-start justify-center gap-24">
        <h1>Développement Web & <br> & Sites Sur Mesure</h1>
        <div class="flex flex-col items-start justify-start self-end gap-12 w-3/5">
            <p class="text-body-base text-sk-grey">
                Nous développons des sites web sur mesure qui rehaussent la présence en ligne de votre marque. Grâce à
                notre expertise technique, nous transformons vos idées en réalité digitale.
            </p>
            <x-button.secondary mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
@endsection
