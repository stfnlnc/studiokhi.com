@extends('base')
@section('title', 'FAQ')

@vite(['resources/js/page-service.js'])

@section('content')
    <section id="hero"
             class="relative z-10 flex w-full flex-col gap-20 border-b px-4 py-36 h-[100lvh] bg-sk-purple text-sk-dark border-sk-light-grey lg:px-8 lg:py-48 xl:px-16">
        <h1>Développement Web & <br>
            Sites Sur Mesure</h1>
        <div class="flex w-full flex-col gap-4 self-end lg:w-1/2">
            <p class="text-body-base">
                Nous développons des sites web sur mesure qui rehaussent la présence en ligne de votre marque. Grâce à notre expertise technique, nous
                transformons vos idées en réalité digitale. Avec nous, votre site sera fonctionnel, sécurisé, performant et parfaitement adapté à vos
                besoins.
            </p>
            <x-button.primary mode="darker" icon>Réservez votre appel découverte</x-button.primary>
        </div>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-4 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:flex-row lg:px-8 xl:px-16">
        <p id="pin-title" class="w-full text-body-lg lg:w-2/5">
            Développer un site web sur mesure qui répond parfaitement à vos besoins et vos envies.
        </p>
        <div class="flex w-full flex-col gap-8 text-sk-light lg:w-3/5">
            <card class="flex flex-col gap-4 rounded-3xl p-8 bg-sk-dark">
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
            <card class="flex flex-col gap-4 rounded-3xl p-8 bg-sk-dark">
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
            <card class="flex flex-col gap-4 rounded-3xl p-8 bg-sk-dark">
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
            <card class="flex flex-col gap-4 rounded-3xl p-8 bg-sk-dark">
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
    <section
        class="relative z-10 flex w-full flex-col gap-20 border-t px-4 py-24 bg-sk-light border-sk-light-grey lg:px-8 xl:px-16">
        <div class="flex flex-col gap-4 lg:flex-row">
            <p class="w-2/5 text-body-lg">
                Notre savoir-faire
            </p>
            <div class="flex w-full flex-col gap-14 lg:w-3/5">
                <h3>
                    Des identités uniques et impactantes pour propulser et élever votre marque.
                </h3>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-16 md:grid-cols-3">
            <div class="flex flex-col gap-8">
                <p class="text-body-lg">
                    Adobe Designer
                </p>
                <p class="text-body-sm text-sk-grey">
                    Nous utilisons la suite Adobe Creative pour donner vie à votre marque. Ces logiciels offrent une
                    gamme d'outils polyvalents et performants, allant de la conception de logos à la création de
                    documents marketing. Nous pouvons ainsi exprimer pleinement la personnalité et les valeurs de
                    votre marque à travers des designs percutants et professionnels.
                </p>
            </div>
            <div class="flex flex-col gap-8">
                <p class="text-body-lg">
                    Des designs orientés web
                </p>
                <p class="text-body-sm text-sk-grey">
                    Nos designs sont principalement pensés et conçus pour le web. C'est notre terrain de jeu, et il requiert une approche spécifique.
                    En fusionnant notre expertise des principes graphiques avec les spécificités du monde numérique, nous créons des designs qui
                    renforceront votre image de marque de manière cohérente et engageante.
                </p>
            </div>
            <div class="flex flex-col gap-8">
                <p class="text-body-lg">
                    Cohérence de la marque
                </p>
                <p class="text-body-sm text-sk-grey">
                    L'identité de votre marque ne se limite pas à un seul support. C'est pourquoi nous assurons une déclinaison de votre identité
                    visuelle sur une multitude de supports, des réseaux sociaux en passant par les présentations Powerpoint. Chaque interaction avec
                    votre marque est pensée pour garantir une cohérence et un impact maximal.
                </p>
            </div>
        </div>
    </section>
    <section class="px-4 lg:px-8 xl:px-16 py-4 bg-sk-dark grid grid-cols-3 md:grid-cols-6 gap-8 text-center justify-items-center">
        <img src="https://studiokhi.com/build/images/icons/tools/design/figma.svg" alt="">
        <img src="https://studiokhi.com/build/images/icons/tools/design/figma.svg" alt="">
        <img src="https://studiokhi.com/build/images/icons/tools/design/figma.svg" alt="">
        <img src="https://studiokhi.com/build/images/icons/tools/design/figma.svg" alt="">
        <img src="https://studiokhi.com/build/images/icons/tools/design/figma.svg" alt="">
        <img src="https://studiokhi.com/build/images/icons/tools/design/figma.svg" alt="">
    </section>
    <section
        class="relative z-10 flex w-full flex-col lg:flex-row justify-start gap-8 px-4 py-24 bg-sk-purple lg:px-8 xl:px-16 text-center lg:text-left">
        <div class="h2 w-full lg:w-2/3">Vous souhaitez connaître nos tarifs ?</div>
        <x-button.primary class="lg:ml-auto self-center lg:self-end" mode="darker" icon>Accéder aux tarifs</x-button.primary>
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
    @include('app.partials.cta', [
'title' => 'Prêts à nous partager votre projet ?',
'description' => 'Réservez votre appel découverte',
'color' => 'purple',
'href' => ''
])
@endsection
