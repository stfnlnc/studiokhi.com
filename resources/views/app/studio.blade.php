@extends('base')
@section('title', 'Le Studio')

@vite(['resources/js/page-studio.js'])

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-12 lg:gap-20 px-4 pt-36 pb-12 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
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
        <picture>
            @php $key = 'image-studio-top' @endphp
            @foreach(config('app.image_sizes') as $size)
                <source
                    srcset="{{ asset('uploads/images/' . $key . '/' . $size . '/' . $images[$key]) }}"
                    media="(max-width: {{ $size }}px)"/>
            @endforeach
            <img loading="lazy" id="pin-image" class="w-full h-[100lvh] object-cover object-center"
                 src="{{ asset('uploads/images/' . $key . '/full/' . $images[$key]) }}"
                 alt="Le Studio"/>
        </picture>
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
                    <picture>
                        @php $key = 'image-studio-cynthia' @endphp
                        @foreach(config('app.image_sizes') as $size)
                            <source
                                srcset="{{ asset('uploads/images/' . $key . '/' . $size . '/' . $images[$key]) }}"
                                media="(max-width: {{ $size }}px)"/>
                        @endforeach
                        <img loading="lazy" class="rounded-3xl aspect-[3/4] w-full object-cover object-center"
                             src="{{ asset('uploads/images/' . $key . '/full/' . $images[$key]) }}"
                             alt="Le Studio"/>
                    </picture>
                    <p class="text-body-lg mt-4">Cynthia Jego</p>
                    <p class="text-body-base text-sk-grey">Designer</p>
                    <x-button.secondary href="https://www.linkedin.com/in/cynthia-jego/" icon mode="dark" class="mt-4">Linkedin</x-button.secondary>
                </div>
                <div class="flex flex-col">
                    <picture>
                        @php $key = 'image-studio-stefan' @endphp
                        @foreach(config('app.image_sizes') as $size)
                            <source
                                srcset="{{ asset('uploads/images/' . $key . '/' . $size . '/' . $images[$key]) }}"
                                media="(max-width: {{ $size }}px)"/>
                        @endforeach
                        <img loading="lazy" class="rounded-3xl aspect-[3/4] w-full object-cover object-center"
                             src="{{ asset('uploads/images/' . $key . '/full/' . $images[$key]) }}"
                             alt="Le Studio"/>
                    </picture>
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
        <picture>
            @php $key = 'image-studio-bottom' @endphp
            @foreach(config('app.image_sizes') as $size)
                <source
                    srcset="{{ asset('uploads/images/' . $key . '/' . $size . '/' . $images[$key]) }}"
                    media="(max-width: {{ $size }}px)"/>
            @endforeach
            <img loading="lazy" class="w-full h-[100lvh] object-cover object-center"
                 src="{{ asset('uploads/images/' . $key . '/full/' . $images[$key]) }}"
                 alt="Le Studio"/>
        </picture>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                FAQ
            </p>
            <div class="flex w-full flex-col lg:w-3/5">
                <div class="general-show show-item flex flex-col">
                    <div class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4  py-5 text-body-lg">
                            Pourquoi faire confiance au Studio Khi ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Chez Studio Khi, nous privilégions l'approche humaine et la proximité. Nous limitons volontairement le nombre de
                            projets
                            que nous prenons en charge afin de leur accorder toute l'attention nécessaire. Nous sommes passionnés par notre
                            travail et
                            nous mettons tout en œuvre pour créer des solutions qui vous ressemblent à 100%. De la conception à la mise en ligne,
                            nous
                            gérons l'intégralité du processus pour vous permettre de vous concentrer pleinement sur d'autres aspects de votre
                            entreprise. Travailler avec nous, c'est bénéficier d'un service personnalisé et d'une expertise dédiée à la réussite
                            de
                            votre projet.
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                            Sur quels types de projets notre studio peut-il vous accompagner ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Nous créons des identités visuelles, des designs et des sites web sur mesure, que vous partiez de zéro ou non. Notre
                            agence digitale est là pour répondre à vos besoins web : pour tout type d’entreprise (Entrepreneur individuel,
                            Start-up,
                            TPE, PME, Organisation, Association, etc.) dans tous secteurs (Digital, Saas, Artisanat, Mode, Formations, Culture,
                            Environnement, Outdoor, etc.) et pour tout projet web (Landing page, Site Vitrine, E-commerce, Espace Membre, Refonte
                            de
                            Site, etc.).
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                            Pourquoi un brief est-il important ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Un brief est essentiel car il permet de définir clairement les objectifs, les attentes et les contraintes d'un projet
                            dès
                            le départ. En comprenant pleinement vos besoins, nous pouvons mieux orienter nos efforts pour vous fournir des
                            solutions
                            personnalisées. Afin de créer votre brief, vous pouvez d’ores et déjà nous contacter pour programmer un appel
                            découverte.
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                            Quelles sont les étapes d’un projet ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Les étapes d'un projet varient en fonction de sa nature et de sa complexité, mais en général, elles comprennent la
                            phase
                            de découverte et de brief, la recherche et l'analyse, la conception, le développement, les tests et la révision, puis
                            enfin le déploiement et la maintenance. Chaque étape est soigneusement planifiée et exécutée pour assurer la qualité
                            et la
                            réussite du projet.
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                            Combien de temps dure un projet ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            La durée d'un projet peut varier en fonction de sa complexité, de sa taille et de ses exigences graphiques. Nous
                            travaillons avec chaque client pour établir un calendrier réaliste dès le début du projet. Cela dit, en moyenne, il
                            faut
                            compter environ un mois et demi entre la signature et la validation finale.
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                            Sur quels types de projets notre studio peut-il vous accompagner ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Le prix d'une prestation dépendra des spécificités de votre projet, telles que sa complexité, les fonctionnalités
                            requises, et le niveau de personnalisation souhaité. Nous proposons des solutions adaptées à différents budgets et
                            nous
                            travaillons avec vous pour trouver l'option qui correspond à vos besoins et à vos moyens financiers. Cependant, afin
                            de
                            vous donner une estimation, vous pouvez consulter notre grille tarifaire dans notre
                            <a class="underline underline-offset-4 hover:text-sk-dark" href="{{ route('app.price') }}">Onglet Tarifs</a>.
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                            Quels éléments fournir avant un projet ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Avant de commencer un projet, il est important que vous nous fournissiez toutes les informations pertinentes
                            concernant
                            votre projet, vos objectifs, vos préférences en matière de design, ainsi que tout contenu (textes, images, vidéos,
                            etc.)
                            que vous souhaitez inclure sur votre site web. Plus nous disposons d'informations détaillées dès le départ, plus nous
                            pourrons créer un site web qui répond parfaitement à vos attentes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('app.partials.cta')
@endsection
