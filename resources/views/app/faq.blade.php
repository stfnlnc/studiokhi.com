@extends('base')
@section('title', 'FAQ')

@vite(['resources/js/page-faq.js'])

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-36 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <h1>Des questions ?</h1>
        <p class="text-body-base w-full lg:w-1/2 self-end">
            Nous avons peut-être déjà les réponses à vos questions ! Ne manquez pas notre FAQ pour trouver les réponses dont vous avez besoin.
        </p>
    </section>
    <section
        class="relative z-10 flex w-full flex-row justify-center gap-8 px-4 py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <x-button.primary id="general-show" class="bg-transparent">Le Studio</x-button.primary>
        <x-button.primary id="branding-show" class="bg-transparent">Branding & Logo</x-button.primary>
        <x-button.primary id="webdesign-show" class="bg-transparent">Webdesign & UX/UI Design</x-button.primary>
        <x-button.primary id="website-show" class="bg-transparent">Développement Web</x-button.primary>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                FAQ
            </p>
            <div class="flex w-full flex-col lg:w-3/5">
                <div class="flex flex-col">
                    <div id="general" class="faq-block flex flex-col">
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
                    <div id="branding" class="faq-block flex-col hidden">
                        <div class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4  py-5 text-body-lg">
                                Qu'est-ce que le branding ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Le branding (ou identité visuelle) consiste à définir les valeurs, la personnalité et l'image de votre marque. Il est
                                essentiel car il vous permet de vous différencier de vos concurrents, de renforcer la confiance et la fidélité de vos
                                clients, et d'attirer de nouveaux prospects.
                                <br><br>
                                Le branding s’appuie sur une stratégie que nous élaborons en collaboration avec vous pour comprendre vos objectifs,
                                vos
                                valeurs et votre public cible. Il comprend la création d'un logo, le choix d'une palette de couleurs, d'une
                                typographie et
                                d'autres éléments visuels qui reflètent l'essence de votre marque. Il s'agit également de développer une voix et un
                                ton de
                                communication cohérents pour transmettre votre message de manière efficace.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Qu’est-ce qu’une charte graphique ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Une charte graphique est un document qui définit les principes de base du design graphique d'une marque ou d'un
                                projet.
                                Elle comprend généralement des éléments tels que la palette de couleurs, les typographies, les logos, les règles
                                d'utilisation des images, les motifs ou textures, ainsi que des directives sur la mise en page et le style graphique.
                                Cette charte graphique assure la cohérence visuelle de tous les supports de communication de la marque, garantissant
                                ainsi
                                une identité visuelle reconnaissable et professionnelle.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Quels éléments font partie de l'identité de marque ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Les éléments clés de l'identité de marque comprennent le logo, la typographie, la palette de couleurs, l'imagerie, les
                                valeurs et la voix de communication. Nous concevons ces éléments en nous appuyant sur une analyse approfondie de votre
                                marque et de votre public cible. Nous regroupons ensuite tous ces éléments dans un document PDF - la charte graphique
                                -
                                que nous vous livrons afin que vous ayez toutes les clés pour développer votre marque.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Le studio créé-t-il des logos ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Absolument, nous pouvons créer un logo qui représente efficacement votre marque ou votre entreprise. Notre mission est
                                de
                                prendre le temps de comprendre votre marque, votre secteur d'activité et vos valeurs pour créer un logo unique et
                                mémorable. Nous vous fournirons différentes propositions et travaillerons avec vous pour affiner le design jusqu'à ce
                                qu'il corresponde parfaitement à votre vision.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Comment s’intègre la stratégie de marque dans la conception du site web ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Nos designs sont principalement pensés et conçus pour le web. C'est notre terrain de jeu, et il requiert une approche
                                spécifique. Nous veillons à ce que votre site web reflète parfaitement votre marque, en utilisant les couleurs, la
                                typographie et les images qui lui sont associées. Nous nous assurons également que le contenu et la navigation du site
                                web
                                sont alignés sur votre stratégie de marque.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Quels autres services de design propose le studio ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Pour garantir la cohérence de vos supports de communication, notre studio peut vous aider à décliner différents
                                supports à
                                destination du web, tels que la création de modèles pour vos réseaux sociaux ou encore de présentations marketing et
                                de
                                pitchdecks. Ces supports aideront à renforcer votre image de marque et à transmettre votre message de façon
                                professionnelle et convaincante.
                            </p>
                        </div>
                    </div>
                    <div id="webdesign" class="faq-block flex-col hidden">
                        <div class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4  py-5 text-body-lg">
                                Qu'est-ce que l'UX et UI Design ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                L'UX (User Experience) Design et l'UI (User Interface) Design sont deux disciplines essentielles dans la conception de
                                produits numériques.
                                <br><br>
                                L'UX se concentre sur la manière dont les utilisateurs interagissent avec votre site web. Une bonne UX garantit que
                                votre site est facile à utiliser, intuitif et répond aux besoins de vos utilisateurs. Cela favorise une meilleure
                                satisfaction client et augmente les chances de conversions.
                                <br><br>
                                L'UI Design, quant à lui, se concentre sur l'aspect visuel d'un produit numérique. Il s'agit de la conception des
                                éléments visuels avec lesquels l'utilisateur interagit directement, tels que les boutons, les menus, les icônes, les
                                images, etc. L'UI Design vise à créer une interface esthétique et cohérente avec votre image de marque.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                À quoi servent les maquettes et les prototypes ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Nous créons des maquettes, également appelées prototypes, et des wireframes pour vous aider à visualiser la structure
                                et l'apparence de votre site avant sa création. Cela vous permet de donner votre avis et de faire des modifications
                                avant le développement.
                                <br><br>
                                Le wireframe est une représentation structurale et schématique, tandis que la maquette intègre les détails visuels, ce
                                qui offre une vision plus concrète et esthétique de la conception finale.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Le studio propose-t-il des services de développement web en plus du design ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Oui, nous proposons des services complets de développement web en plus du design. Notre studio est en mesure de
                                transformer les maquettes en sites web entièrement fonctionnels et réactifs. Nous assurons le développement de sites
                                web sur mesure qui répondent à vos besoins spécifiques, tout en garantissant une expérience utilisateur optimale et
                                une performance technique de haut niveau.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Le design est-il responsive ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Nous concevons des sites web en utilisant des techniques de conception responsive, ce qui signifie que votre site
                                s'adaptera automatiquement à tous les appareils, y compris les smartphones et les tablettes. Cela garantit une
                                expérience utilisateur optimale sur tous les appareils et augmente la visibilité de votre site web.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                J’ai déjà une identité visuelle, pouvez-vous quand même créer le design de mon site web ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Absolument, nous sommes parfaitement en mesure de créer le design de votre site web en harmonie avec votre identité
                                visuelle existante. Nous travaillerons en étroite collaboration avec vous pour nous assurer que le design de votre
                                site reflète fidèlement votre identité visuelle et communique efficacement vos valeurs et votre message de marque.
                            </p>
                        </div>
                    </div>
                    <div id="website" class="faq-block flex-col hidden">
                        <div class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Pourquoi créer un site sur mesure ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Un site web sur mesure est un site développé spécifiquement pour répondre aux besoins de votre entreprise.
                                Contrairement aux sites web préfabriqués ou autres templates, il est entièrement personnalisé pour refléter l’identité
                                de votre marque et permet ainsi de se démarquer de la concurrence.
                                <br><br>
                                Créer un site sur mesure permet d'avoir un contrôle total sur le design et les fonctionnalités, offrant ainsi une
                                solution parfaitement adaptée aux besoins et objectifs de l'entreprise. Un site sur mesure signifie une expérience
                                utilisateur personnalisée et une optimisation pour le référencement et les performances.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Quels langages de programmation et technologies utilisez-vous ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Nous utilisons une combinaison de langages de programmation et de technologies adaptés à vos besoins, tels que HTML,
                                CSS, JavaScript, PHP et MySQL. Nous sommes à l'aise avec les frameworks tels que React et Symfony et les CMS
                                populaires tels que WordPress et Shopify.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Pouvez-vous créer des fonctionnalités spécifiques ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Absolument, nous sommes en mesure de développer des fonctionnalités spécifiques et des modules personnalisés pour
                                répondre à vos besoins. Nous pouvons intégrer du code personnalisé sur vos pages pour enrichir votre site web avec des
                                fonctionnalités supplémentaires.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Pourrais-je modifier mon site moi-même ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Oui, vous pourrez modifier votre site à tout moment. Nous mettons en place une interface intuitive qui vous permettra
                                de facilement mettre à jour le contenu de votre site selon vos besoins évolutifs. De plus, nous vous fournirons les
                                outils et les instructions nécessaires pour que vous puissiez gérer votre site de manière autonome sans avoir besoin
                                de connaissances techniques.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Une maintenance est-elle proposée ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                Oui, nous proposons des services de maintenance pour votre site. Notre studio est là pour assurer que votre site reste
                                fonctionnel, sécurisé et à jour en tout temps. Nous offrons des plans de maintenance flexibles, adaptés à vos besoins
                                spécifiques, vous permettant de vous concentrer sur votre activité principale en toute tranquillité d'esprit.
                            </p>
                        </div>
                        <div
                            class="w-full border-b faq border-sk-light-grey">
                            <div
                                class="flex cursor-pointer flex-row items-center justify-between gap-4 py-5 text-body-lg">
                                Quels sont les délais pour la création d'un site web ?
                                <x-icon.plus class="ml-4 shrink-0 h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                            </div>
                            <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                                La durée d'un projet peut varier en fonction de sa complexité, de sa taille et de ses exigences graphiques. Nous
                                travaillons avec chaque client pour établir un calendrier réaliste dès le début du projet. Cela dit, en moyenne, il
                                faut compter environ un mois et demi entre la signature et la validation finale.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
