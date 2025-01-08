@extends('base')

@vite(['resources/js/page-index.js'])

@section('content')
    <section id="hero"
             class="relative z-10 flex w-full flex-col items-center justify-center px-4 bg-sk-light h-[100lvh] min-h-[700px] lg:px-8 xl:px-16">
        <div class="flex flex-col-reverse items-center gap-8 text-center md:flex-col">
            <x-button.primary :href="config('app.calendly')" mode="dark" icon>Réserver votre appel découverte</x-button.primary>
            <p class="w-full text-body-base  sm:w-1/2">Nous créons des sites et des designs pour des marques
                et des
                entrepreneur
                qui souhaitent se démarquer sur le web.</p>
            <x-logo.square class="mb-16 block w-48 fill-sk-dark md:hidden"/>
        </div>
        <x-logo.inline class="absolute bottom-0 left-0 hidden w-full px-4 fill-sk-dark md:block lg:px-8 xl:px-16"/>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16 -mb-2">
        <p class="w-full lg:w-2/5 text-body-lg">
            Notre approche
        </p>
        <div class="flex w-full flex-col gap-14 lg:w-3/5">
            <h1 class="h3 w-full md:w-4/5">On vous accompagne pour que vous ne ressembliez à personne.</h1>
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
                <x-button.secondary class="link-loader" href="{{ route('app.studio') }}" mode="dark" icon>Découvrir le studio</x-button.secondary>
                <x-button.secondary class="link-loader" href="{{ route('app.work') }}" mode="dark" icon>Voir nos réalisations</x-button.secondary>
            </div>
        </div>
    </section>
    <section
        class="relative z-10 flex h-auto w-full flex-col items-start justify-center gap-16 px-4 py-24 service min-h-[700px] bg-sk-green md:h-screen lg:px-8 xl:px-16">
        <div>
            <h1>Branding & <br> Direction Artistique</h1>
        </div>
        <div class="flex w-full flex-col items-start justify-start gap-12 self-end lg:w-3/5">
            <p class="w-full text-body-base text-sk-grey sm:w-2/3">
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
            <x-button.secondary :href="route('app.price')" class="link-loader" mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
    <section
        class="relative z-10 flex h-auto w-full flex-col items-start justify-center gap-16 px-4 py-24 service min-h-[700px] bg-sk-blue md:h-screen lg:px-8 xl:px-16">
        <div>
            <h1>Webdesign & <br> Design Digital</h1>
        </div>
        <div class="flex w-full flex-col items-start justify-start gap-12 self-end lg:w-3/5">
            <p class="w-full text-body-base text-sk-grey sm:w-2/3">
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
            <x-button.secondary :href="route('app.price')" class="link-loader" mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
    <section
        class="relative z-10 flex h-auto w-full flex-col items-start justify-center gap-16 px-4 py-24 service min-h-[700px] bg-sk-purple md:h-screen lg:px-8 xl:px-16">
        <div class="w-full">
            <h1 class="break-words">Développement Web & <br> Sites Sur Mesure</h1>
        </div>
        <div class="flex w-full flex-col items-start justify-start gap-12 self-end lg:w-3/5">
            <p class="w-full text-body-base text-sk-grey sm:w-2/3">
                Nous développons des sites web sur mesure qui rehaussent la présence en ligne de votre marque. Grâce à
                notre expertise technique, nous transformons vos idées en réalité digitale.
            </p>
            <ul class="text-sk-dark text-body-base">
                <li>Site Vitrine & E-Commerce</li>
                <li>Front-end & Back-end</li>
                <li>Fonctionnalités Sur Mesure</li>
                <li>SEO & Référencement Naturel</li>
                <li>Formation & Maintenance</li>
            </ul>
            <x-button.secondary :href="route('app.price')" class="link-loader" mode="dark" icon>Infos & Tarifs</x-button.secondary>
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:px-8 xl:px-16">
        <div class="flex flex-col gap-4 lg:flex-row">
            <p class="w-full lg:w-2/5 text-body-lg">
                Nos réalisations
            </p>
            <div class="flex w-full flex-col gap-14 lg:w-3/5">
                <div class="text-body-base text-sk-grey">
                    <p>Nous nous efforçons de toujours créer quelque chose qui sort de l'ordinaire.
                        <br><br>
                        Notre portfolio reflète notre expertise et notre engagement à fournir des produits et des
                        marques
                        numériques de haute qualité.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-20">
            @foreach($works as $work)
                <a href="{{ route('app.work.show', $work->slug) }}" class="relative flex w-full flex-col gap-4">
                    <picture>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/1536/' . $work->image_path) }}" media="(min-width: 1536px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/1280/' . $work->image_path) }}" media="(min-width: 1280px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/960/' . $work->image_path) }}" media="(min-width: 960px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/640/' . $work->image_path) }}" media="(min-width: 640px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/480/' . $work->image_path) }}" media="(min-width: 480px)"/>
                        <img loading="lazy" class="aspect-video rounded-2xl object-cover object-center"
                             src="{{ asset('uploads/works/' . $work->slug . '/full/' . $work->image_path) }}" alt="{{ $work->title }}"/>
                    </picture>
                    <div class="top-5 left-5 flex flex-row gap-2 lg:absolute">
                        @foreach($work->tags as $tag)
                            <x-tag.primary color="{{ $tag->color }}">{{ $tag->name }}</x-tag.primary>
                        @endforeach
                    </div>
                    <div class="flex w-full flex-col items-start justify-start gap-2 lg:flex-row">
                        <p class="text-body-lg lg:w-2/5">{{ $work->title }}</p>
                        <p class="text-body-base text-sk-grey lg:w-2/5">{{ $work->subtitle }}</p>
                        <p class="text-body-base lg:ml-auto">{{ $work->type }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <x-button.secondary :href="route('app.work')" class="link-loader self-end" mode="dark" icon>Voir toutes les réalisations</x-button.secondary>
    </section>
    @include('app.partials.process')
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                Le Studio
            </p>
            <div class="flex w-full flex-col gap-14 lg:w-3/5">
                <h1 class="h3 w-full md:w-4/5">
                    Un duo créatif au service d’une seule mission : vous rendre unique.
                </h1>
                <div class="text-body-base text-sk-grey">
                    <p>Derrière Studio Khi, nous sommes deux : une designer et un développeur. Nous avons rassemblé nos
                        compétences afin de vous proposer une expertise complète au service de votre marque.
                    </p>
                </div>
                <div class="flex flex-col gap-2">
                    <x-button.secondary href="{{ route('app.studio') }}" class="link-loader" mode="dark" icon>Découvrir
                        le studio
                    </x-button.secondary>
                </div>
            </div>
        </div>
        <div class="flex flex-row w-full">
            <div class="hidden lg:block w-2/5 pr-8">
                <picture class="w-full rounded-3xl object-cover object-center h-[32rem]">
                    <source srcset="{{ asset('images/studio-photo-2/960/studio-photo-2.webp') }}" media="(min-width: 1536px)"/>
                    <source srcset="{{ asset('images/studio-photo-2/640/studio-photo-2.webp') }}" media="(min-width: 1280px)"/>
                    <source srcset="{{ asset('images/studio-photo-2/480/studio-photo-2.webp') }}" media="(min-width: 960px)"/>
                    <img loading="lazy" class="w-full h-[32rem] rounded-3xl object-cover object-center"
                         src="{{ asset('images/studio-photo-2/480/studio-photo-2.webp') }}" alt="Le Studio"/>
                </picture>
            </div>
            <picture class="lg:w-3/5 w-full">
                <source srcset="{{ asset('images/studio-photo/960/studio-photo.webp') }}" media="(min-width: 1536px)"/>
                <source srcset="{{ asset('images/studio-photo/640/studio-photo.webp') }}" media="(min-width: 1280px)"/>
                <source srcset="{{ asset('images/studio-photo/480/studio-photo.webp') }}" media="(min-width: 960px)"/>
                <img loading="lazy" class="w-full h-[32rem] rounded-3xl object-cover object-center"
                     src="{{ asset('images/studio-photo/480/studio-photo.webp') }}" alt="Le Studio"/>

            </picture>
        </div>
    </section>
    @include('app.partials.review')
    <section
        class="relative z-10 flex w-full flex-col gap-20 border-t px-4 py-24 bg-sk-dark text-sk-light border-sk-light-grey lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                Articles
            </p>
            <div class="flex w-full flex-col gap-14 lg:w-3/5">
                <div class="text-body-base">
                    <p> Vous proposer notre vision et nos réflexions sur le design, le web et la stratégie digitale par
                        notre sélection d’articles.
                    </p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mg:gap-5">
            @foreach($posts as $post)
                <div class="flex flex-col items-start gap-4">
                    <a href="{{ route('app.post.show', $post->slug) }}">
                        <picture>
                            <source srcset="{{ asset('uploads/posts/' . $post->slug . '/full/' . $post->image_path) }}" media="(min-width: 1536px)"/>
                            <source srcset="{{ asset('uploads/posts/' . $post->slug . '/1536/' . $post->image_path) }}" media="(min-width: 1280px)"/>
                            <source srcset="{{ asset('uploads/posts/' . $post->slug . '/1280/' . $post->image_path) }}" media="(min-width: 960px)"/>
                            <source srcset="{{ asset('uploads/posts/' . $post->slug . '/960/' . $post->image_path) }}" media="(min-width: 640px)"/>
                            <source srcset="{{ asset('uploads/posts/' . $post->slug . '/640/' . $post->image_path) }}" media="(min-width: 480px)"/>
                            <img loading="lazy" class="aspect-square rounded-3xl object-cover object-center"
                                 src="{{ asset('uploads/posts/' . $post->slug . '/480/' . $post->image_path) }}" alt="{{ $post->title }}"/>
                        </picture>
                    </a>
                    <a href="{{ route('app.post.show', $post->slug) }}" class="mt-2 w-3/4 text-body-lg">
                        {{ $post->title }}
                    </a>
                    <x-button.secondary>Lire l'article</x-button.secondary>
                </div>
            @endforeach
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                FAQ
            </p>
            <div class="flex w-full flex-col lg:w-3/5">
                <div id="general" class="flex flex-col">
                    <div class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between gap-4  py-5 text-body-lg">
                            Pourquoi faire confiance au Studio Khi ?
                            <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Chez Studio Khi, nous privilégions l'approche humaine et la proximité. Nous limitons volontairement le nombre de projets
                            que nous prenons en charge afin de leur accorder toute l'attention nécessaire. Nous sommes passionnés par notre travail et
                            nous mettons tout en œuvre pour créer des solutions qui vous ressemblent à 100%. De la conception à la mise en ligne, nous
                            gérons l'intégralité du processus pour vous permettre de vous concentrer pleinement sur d'autres aspects de votre
                            entreprise. Travailler avec nous, c'est bénéficier d'un service personnalisé et d'une expertise dédiée à la réussite de
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
                            agence digitale est là pour répondre à vos besoins web : pour tout type d’entreprise (Entrepreneur individuel, Start-up,
                            TPE, PME, Organisation, Association, etc.) dans tous secteurs (Digital, Saas, Artisanat, Mode, Formations, Culture,
                            Environnement, Outdoor, etc.) et pour tout projet web (Landing page, Site Vitrine, E-commerce, Espace Membre, Refonte de
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
                            Un brief est essentiel car il permet de définir clairement les objectifs, les attentes et les contraintes d'un projet dès
                            le départ. En comprenant pleinement vos besoins, nous pouvons mieux orienter nos efforts pour vous fournir des solutions
                            personnalisées. Afin de créer votre brief, vous pouvez d’ores et déjà nous contacter pour programmer un appel découverte.
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
                            Les étapes d'un projet varient en fonction de sa nature et de sa complexité, mais en général, elles comprennent la phase
                            de découverte et de brief, la recherche et l'analyse, la conception, le développement, les tests et la révision, puis
                            enfin le déploiement et la maintenance. Chaque étape est soigneusement planifiée et exécutée pour assurer la qualité et la
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
                            travaillons avec chaque client pour établir un calendrier réaliste dès le début du projet. Cela dit, en moyenne, il faut
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
                            requises, et le niveau de personnalisation souhaité. Nous proposons des solutions adaptées à différents budgets et nous
                            travaillons avec vous pour trouver l'option qui correspond à vos besoins et à vos moyens financiers. Cependant, afin de
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
                            Avant de commencer un projet, il est important que vous nous fournissiez toutes les informations pertinentes concernant
                            votre projet, vos objectifs, vos préférences en matière de design, ainsi que tout contenu (textes, images, vidéos, etc.)
                            que vous souhaitez inclure sur votre site web. Plus nous disposons d'informations détaillées dès le départ, plus nous
                            pourrons créer un site web qui répond parfaitement à vos attentes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
