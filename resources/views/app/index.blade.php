@extends('base')

@vite(['resources/js/page-index.js'])

@section('content')
    <section id="hero"
             class="relative z-10 flex w-full flex-col items-center justify-center px-4 bg-sk-light h-[100lvh] min-h-[700px] lg:px-8 xl:px-16">
        <div class="flex flex-col-reverse items-center gap-8 text-center md:flex-col">
            <x-button.primary mode="dark" icon>Réserver votre appel découverte</x-button.primary>
            <p class="w-full text-body-base  sm:w-1/2">Nous créons des sites et des designs pour des marques
                et des
                entrepreneurs
                qui souhaitent se démarquer sur le web.</p>
            <x-logo.square class="mb-16 block w-48 fill-sk-dark md:hidden"/>
        </div>
        <x-logo.inline class="absolute bottom-0 left-0 hidden w-full px-4 fill-sk-dark md:block lg:px-8 xl:px-16"/>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p class="w-full lg:w-2/5 text-body-lg">
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
                <x-button.secondary class="link-loader" href="{{ route('app.studio') }}" mode="dark" icon>Découvrir le studio</x-button.secondary>
                <x-button.secondary class="link-loader" href="{{ route('app.work') }}" mode="dark" icon>Voir nos réalisations</x-button.secondary>
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
        <div class="w-full">
            <span class="text-sk-dark text-body-base">03</span>
            <h1 class="break-words">Développement Web & <br> Sites Sur Mesure</h1>
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
            <div class="relative flex w-full flex-col gap-4">
                <img class="aspect-video rounded-2xl"
                     src="https://studiokhi.com/uploads/projects/featured/full/oto-nove-swiss-3bd98c001b712315dcd1f01d71b4755f.webp"
                     alt="">
                <div class="top-5 left-5 flex flex-row gap-2 lg:absolute">
                    <x-tag.primary color="blue">Développement web</x-tag.primary>
                    <x-tag.primary color="purple">Branding</x-tag.primary>
                </div>
                <div class="flex w-full flex-col items-start justify-start gap-2 lg:flex-row">
                    <p class="text-body-lg lg:w-2/5">Nom du projet</p>
                    <p class="text-body-base text-sk-grey lg:w-2/5">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed
                        do eiusmod
                        tempor incididunt ut labore.</p>
                    <p class="text-body-base lg:ml-auto">Tech</p>
                </div>
            </div>
        </div>
        <x-button.secondary class="self-end" mode="dark" icon>Voir toutes les réalisations</x-button.secondary>
    </section>
    @include('app.partials.process')
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                Le Studio
            </p>
            <div class="flex w-full flex-col gap-14 lg:w-3/5">
                <h3 class="w-full md:w-4/5">
                    Un duo créatif au service d’une seule mission : vous rendre unique.
                </h3>
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
        <div class="lg:grid lg:grid-cols-5">
            <div class="hidden lg:block col-span-2 lg:mr-8">
                <img class="w-full rounded-3xl object-cover object-center h-[32rem]"
                     src="https://studiokhi.com/build/images/uploads/studio-2.webp" alt="">
            </div>
            <img class="col-span-3 w-full rounded-3xl object-cover object-center h-[32rem]"
                 src="https://studiokhi.com/build/images/uploads/studio-2.webp" alt="">
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
            <div class="flex flex-col items-start gap-4">
                <a href="">
                    <img class="aspect-square rounded-3xl object-cover object-center"
                         src="https://studiokhi.com/uploads/posts/featured/large/l-ux-c-est-quoi-et-pourquoi-c-est-essentiel-437db8679015ca4b76db607954d43a3f.webp"
                         alt="">
                </a>
                <a href="" class="mt-2 w-3/4 text-body-lg">
                    5 ways the power of Ai might impact your corporate vision
                </a>
                <x-button.secondary>Lire l'article</x-button.secondary>
            </div>
            <div class="flex flex-col items-start gap-4">
                <a href="">
                    <img class="aspect-square rounded-3xl object-cover object-center"
                         src="https://studiokhi.com/uploads/posts/featured/large/l-ux-c-est-quoi-et-pourquoi-c-est-essentiel-437db8679015ca4b76db607954d43a3f.webp"
                         alt="">
                </a>
                <a href="" class="mt-2 w-3/4 text-body-lg">
                    5 ways the power of Ai might impact your corporate vision
                </a>
                <x-button.secondary>Lire l'article</x-button.secondary>
            </div>
        </div>
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

@endsection
