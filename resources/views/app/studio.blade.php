@extends('base')
@section('title', 'Le Studio')

@vite(['resources/js/page-studio.js'])

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-20 border-b px-4 py-36 bg-sk-light text-sk-dark border-sk-light-grey lg:px-8 lg:py-48 xl:px-16">
        <h1>Découvrir notre studio</h1>
        <div class="flex w-full flex-col gap-16 self-end lg:w-1/2">
            <p class="text-body-base">
                Fondé par Cynthia Jego et Stéfan Lancelot, notre studio de création est basé à Pau, aux portes des Pyrénées. Nous créons des sites et
                des designs sur mesure pour des marques et des entrepreneurs qui souhaitent se démarquer sur le web, et ce, à travers la France.
            </p>
            <x-button.primary target="_blank" :href="config('app.calendly')" mode="darker" icon>Réservez votre appel découverte</x-button.primary>
        </div>
    </section>
    <section class="relative z-10 bg-sk-light">
        <img id="pin-image" class="w-full h-[100lvh]" src="https://studiokhi.com/build/images/uploads/le-studio-1.webp" alt="">
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-full lg:w-2/5 text-body-lg">
            Notre approche
        </p>
        <div class="flex w-full flex-col gap-14 lg:w-3/5">
            <h3 class="w-full md:w-4/5">
                Combiner design et développement web pour créer des marques et des sites que l’on remarque.
            </h3>
            <div class="text-body-base text-sk-grey">
                <p>
                    Chez Studio Khi, nous estimons que chaque projet est bien plus qu'une simple création ; c'est une opportunité d'établir une
                    présence en ligne distinctive et mémorable. Nous croyons en la puissance du design sur mesure pour façonner des expériences
                    numériques uniques qui captivent les utilisateurs et amplifient la valeur de votre marque. Dans un marché concurrentiel où chaque
                    détail compte, le design n'est plus juste une option, mais une nécessité pour se démarquer.
                    <br><br>
                    Nous créons des sites internet et des designs sur mesure, avec comme ligne de mire de vous offrir des outils à la fois créatifs,
                    intuitifs et performants.
                </p>
            </div>
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 border-t px-4 py-24 bg-sk-dark text-sk-light border-sk-light-grey lg:px-8 xl:px-16">
        <div class="flex flex-col gap-16">
            <h3 class="w-full lg:w-2/5">
                Une agence à 360° pour tout votre site
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16">
                <div class="flex flex-col gap-8">
                    <p class="text-body-lg">
                        Branding & <br>
                        Direction Artistique
                    </p>
                    <p class="text-body-sm text-sk-grey">
                        Nous créons votre image de marque en cohérence avec vos valeurs et concevons des identités web pour renforcer votre présence
                        en ligne.
                    </p>
                    <x-button.secondary :href="route('app.price')" class="mt-auto" mode="light" icon>Infos & Tarifs</x-button.secondary>
                </div>
                <div class="flex flex-col gap-8">
                    <p class="text-body-lg">
                        Webdesign & <br>
                        Design Digital
                    </p>
                    <p class="text-body-sm text-sk-grey">
                        La phase de design sur Figma permet de créer une maquette de site web qui répond à vos attentes tout en proposant une
                        expérience utilisateur optimale.
                    </p>
                    <x-button.secondary :href="route('app.price')" class="mt-auto" mode="light" icon>Infos & Tarifs</x-button.secondary>
                </div>
                <div class="flex flex-col gap-8">
                    <p class="text-body-lg">
                        Développement Web & <br>
                        Sites Sur Mesure
                    </p>
                    <p class="text-body-sm text-sk-grey">
                        Nous développons votre site en langage web, identique à la maquette, tout en respectant les meilleures pratiques du web.
                    </p>
                    <x-button.secondary :href="route('app.price')" class="mt-auto" mode="light" icon>Infos & Tarifs</x-button.secondary>
                </div>
            </div>
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-full lg:w-2/5 text-body-lg">
            L'équipe
        </p>
        <div class="flex w-full flex-col gap-14 lg:w-3/5">
            <h3 class="w-full md:w-4/5">
                Un duo de passionnés dévoués à des projets passionnants.
            </h3>
            <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col">
                    <img class="rounded-3xl aspect-[3/4] w-full object-cover object-center"
                         src="https://studiokhi.com/build/images/uploads/cynthia-jego.webp" alt="">
                    <p class="text-body-lg mt-4">Cynthia Jego</p>
                    <p class="text-body-base text-sk-grey">Designer</p>
                    <x-button.secondary href="https://www.linkedin.com/in/cynthia-jego/" icon mode="dark" class="mt-4">Linkedin</x-button.secondary>
                </div>
                <div class="flex flex-col">
                    <img class="rounded-3xl aspect-[3/4] w-full object-cover object-center"
                         src="https://studiokhi.com/build/images/uploads/stefan-lancelot.webp" alt="">
                    <p class="text-body-lg mt-4">Stefan Lancelot</p>
                    <p class="text-body-base text-sk-grey">Développeur web</p>
                    <x-button.secondary href="https://www.linkedin.com/in/stefan-lancelot/" icon mode="dark" class="mt-4">Linkedin
                    </x-button.secondary>
                </div>
            </div>
        </div>
    </section>
    @include('app.partials.process')
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-full lg:w-2/5 text-body-lg">
            Notre approche
        </p>
        <div class="flex w-full flex-col gap-8 lg:w-3/5 text-sk-light">
            <card class="flex flex-col gap-4 bg-sk-dark rounded-3xl p-8">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" fill="#191919"></rect>
                    <path d="M31.3601 0.587891H0.587891V31.3089H31.3601V0.587891Z" stroke="#191919" stroke-width="5" stroke-miterlimit="10"></path>
                    <path
                        d="M17.469 19.6706L26.9203 10.1869L21.7554 5.00431L12.3045 14.4876L12.3044 5.00006L5 5V19.7922C5 21.0887 5.51325 22.3322 6.42685 23.249L8.73754 25.5679C9.65131 26.4848 10.8907 27 12.183 27L26.9251 26.9998L26.9252 19.6706L17.469 19.6706Z"
                        fill="white"></path>
                </svg>
                <p class="text-body-lg">Une équipe réactive et dévouée</p>
                <p class="text-body-sm text-sk-grey">
                    En tant que studio indépendant, nous attachons une grande importance à la qualité plutôt qu'à la quantité de nos projets. C'est
                    pourquoi nous nous engageons sur un nombre limité de projets à la fois, nous permettant ainsi de nous concentrer pleinement sur
                    chaque client et chaque projet.
                </p>
            </card>
            <card class="flex flex-col gap-4 bg-sk-dark rounded-3xl p-8">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" fill="#191919"></rect>
                    <path d="M31.3601 0.587891H0.587891V31.3089H31.3601V0.587891Z" stroke="#191919" stroke-width="5" stroke-miterlimit="10"></path>
                    <path
                        d="M17.469 19.6706L26.9203 10.1869L21.7554 5.00431L12.3045 14.4876L12.3044 5.00006L5 5V19.7922C5 21.0887 5.51325 22.3322 6.42685 23.249L8.73754 25.5679C9.65131 26.4848 10.8907 27 12.183 27L26.9251 26.9998L26.9252 19.6706L17.469 19.6706Z"
                        fill="white"></path>
                </svg>
                <p class="text-body-lg">Une expertise web complète</p>
                <p class="text-body-sm text-sk-grey">
                    Notre studio offre une gamme complète de services de création de sites web et de designs, couvrant tous les besoins de nos
                    clients, de la conception initiale à la mise en ligne et au-delà.
                </p>
            </card>
            <card class="flex flex-col gap-4 bg-sk-dark rounded-3xl p-8">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" fill="#191919"></rect>
                    <path d="M31.3601 0.587891H0.587891V31.3089H31.3601V0.587891Z" stroke="#191919" stroke-width="5" stroke-miterlimit="10"></path>
                    <path
                        d="M17.469 19.6706L26.9203 10.1869L21.7554 5.00431L12.3045 14.4876L12.3044 5.00006L5 5V19.7922C5 21.0887 5.51325 22.3322 6.42685 23.249L8.73754 25.5679C9.65131 26.4848 10.8907 27 12.183 27L26.9251 26.9998L26.9252 19.6706L17.469 19.6706Z"
                        fill="white"></path>
                </svg>
                <p class="text-body-lg">Une approche créative & sur mesure</p>
                <p class="text-body-sm text-sk-grey">
                    Nous sommes reconnus pour notre approche créative et personnalisée dans la conception de sites web et de designs, ce qui garantit
                    à nos clients des produits uniques et qui répondent pleinement à leurs besoins.
                </p>
            </card>
            <card class="flex flex-col gap-4 bg-sk-dark rounded-3xl p-8">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="32" height="32" fill="#191919"></rect>
                    <path d="M31.3601 0.587891H0.587891V31.3089H31.3601V0.587891Z" stroke="#191919" stroke-width="5" stroke-miterlimit="10"></path>
                    <path
                        d="M17.469 19.6706L26.9203 10.1869L21.7554 5.00431L12.3045 14.4876L12.3044 5.00006L5 5V19.7922C5 21.0887 5.51325 22.3322 6.42685 23.249L8.73754 25.5679C9.65131 26.4848 10.8907 27 12.183 27L26.9251 26.9998L26.9252 19.6706L17.469 19.6706Z"
                        fill="white"></path>
                </svg>
                <p class="text-body-lg">Pour les entrepreneurs et les entreprises </p>
                <p class="text-body-sm text-sk-grey">
                    Que vous soyez en phase de refonte de site internet ou en train de développer une nouvelle marque, nous accompagnons aussi bien
                    les entrepreneurs solo que les entreprises dans cette étape de transformation ou création.
                </p>
            </card>
        </div>
    </section>
    @include('app.partials.review')
    <section>
        <img class="w-full h-[100lvh]" src="https://studiokhi.com/build/images/uploads/le-studio-1.webp" alt="">
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                FAQ
            </p>
            <div class="flex w-full flex-col lg:w-3/5">
                <div class="flex flex-col">
                    <div class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between  py-5 text-body-lg">
                            Pourquoi faire confiance au Studio Khi ?
                            <x-icon.plus class="h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam animi aperiam
                            commodi, corporis dolorem ea fugit impedit ipsum labore nobis obcaecati omnis quod soluta
                            tempora totam vero voluptate.
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between py-5 text-body-lg">
                            Pourquoi faire confiance au Studio Khi ?
                            <x-icon.plus class="h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam animi aperiam
                            commodi, corporis dolorem ea fugit impedit ipsum labore nobis obcaecati omnis quod soluta
                            tempora totam vero voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                            adipisci aliquam animi aperiam
                            commodi, corporis dolorem ea fugit impedit ipsum labore nobis obcaecati omnis quod soluta
                            tempora totam vero voluptate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col items-center gap-16 px-4 py-24 bg-sk-beige lg:px-8 xl:px-16 text-center">
        <div class="h2 w-full lg:w-2/3">Prêts à nous partager votre projet ?</div>
        <x-button.primary :href="config('app.calendly')" mode="darker" icon>Réservez votre appel découverte</x-button.primary>
    </section>
@endsection
