@extends('base')

@vite(['resources/js/page-index.js'])

@section('content')
    <section id="hero"
             class="relative z-0 flex w-full flex-col items-center justify-center px-4 h-[100lvh] min-h-[700px] lg:px-8 xl:px-16">
        <div class="flex flex-col-reverse items-center gap-8 text-center md:flex-col">
            <x-button.primary mode="dark" icon>Réserver votre appel découverte</x-button.primary>
            <p class="w-full text-body-base text-sk-grey sm:w-1/2">Nous créons des sites et des designs pour des marques
                et des
                entrepreneurs
                qui souhaitent se démarquer sur le web.</p>
            <x-logo.square class="mb-16 block w-48 fill-sk-dark md:hidden"/>
        </div>
        <x-logo.inline class="absolute bottom-0 left-0 hidden w-full px-4 fill-sk-dark md:block lg:px-8 xl:px-16"/>
    </section>
    <section
        class="relative z-10 flex w-full flex-col border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-2/5 text-body-lg">
            Notre approche
        </p>
        <div class="flex w-full flex-col gap-14 lg:w-3/5">
            <h3 class="w-full md:w-4/5">On vous accompagne pour que vous ne ressembliez à personne.</h3>
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
        class="relative z-10 flex h-auto w-full flex-col items-start justify-center gap-24 px-4 py-24 service min-h-[700px] bg-sk-green md:h-screen lg:px-8 xl:px-16">
        <div>
            <span class="text-sk-dark text-body-base">01</span>
            <h1>Branding & <br> Direction Artistique</h1>
        </div>
        <div class="flex w-full flex-col items-start justify-start gap-12 self-end lg:w-3/5">
            <p class="w-full text-body-base text-sk-grey sm:w-1/2">
                Du logo à un système graphique audacieux, nous élaborons ensemble une image qui vous ressemble pour
                renforcer votre présence en ligne.
            </p>
            <ul class="text-sk-dark text-body-base">
                <li>Moodboards</li>
                <li>Logo</li>
                <li>Identité Visuelle</li>
                <li>Charte graphique</li>
                <li>Design Réseaux Sociaux</li>
                <li>Pitchdeck</li>
            </ul>
            <x-button.secondary mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
    <section
        class="relative z-10 flex h-auto w-full flex-col items-start justify-center gap-24 px-4 py-24 service min-h-[700px] bg-sk-blue md:h-screen lg:px-8 xl:px-16">
        <div>
            <span class="text-sk-dark text-body-base">02</span>
            <h1>Webdesign & <br> Design Digital</h1>
        </div>
        <div class="flex w-full flex-col items-start justify-start gap-12 self-end lg:w-3/5">
            <p class="w-full text-body-base text-sk-grey sm:w-1/2">
                Nous sommes spécialisés dans la conception de sites web qui attirent et retiennent l'attention. Notre
                approche est de trouver le juste équilibre entre beauté et fonctionnalité.
            </p>
            <ul class="text-sk-dark text-body-base">
                <li>Webdesign</li>
                <li>UX & UI Design</li>
                <li>Wireframe</li>
                <li>Maquettes & Prototypes</li>
                <li>Design System</li>
            </ul>
            <x-button.secondary mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
    <section
        class="relative z-10 flex h-auto w-full flex-col items-start justify-center gap-24 px-4 py-24 service min-h-[700px] bg-sk-purple md:h-screen lg:px-8 xl:px-16">
        <div>
            <span class="text-sk-dark text-body-base">03</span>
            <h1 class="break-all">Développement Web & <br> Sites Sur Mesure</h1>
        </div>
        <div class="flex w-full flex-col items-start justify-start gap-12 self-end lg:w-3/5">
            <p class="w-full text-body-base text-sk-grey sm:w-1/2">
                Nous développons des sites web sur mesure qui rehaussent la présence en ligne de votre marque. Grâce à
                notre expertise technique, nous transformons vos idées en réalité digitale.
            </p>
            <ul class="text-sk-dark text-body-base">
                <li>Site vitrine</li>
                <li>Site E-Commerce</li>
                <li>Front-end & Back-end</li>
                <li>Fonctionnalités Sur Mesure</li>
                <li>SEO & Référencement Naturel</li>
                <li>Formation & Maintenance</li>
            </ul>
            <x-button.secondary mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
@endsection
