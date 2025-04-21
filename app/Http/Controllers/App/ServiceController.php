<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function branding()
    {
        $data = [
            'pageTitle' => 'Branding & Direction Artistique',
            'title' => 'Branding & <br> Direction Artistique',
            'description' => 'Identifiable et mémorable, votre image se doit être distinctive et en cohérence avec vos valeurs et votre discours. Du logo à la charte graphique, nous élaborons ensemble une image qui vous ressemble et qui peut faire la différence. Nous traduisons visuellement votre histoire.',
            'color' => 'green',
            'cardsTitle' => 'Créer une identité visuelle unique pour que votre marque se fasse enfin remarquer sur le web.',
            'cards' => [
                'Moodboards' => 'Avant chaque projet, nous créons des moodboards (ou planches d’ambiance) qui nous permettent de rassembler des idées et des inspirations pour guider le processus de création et assurer une cohérence visuelle.',

                'Logo & Identité Visuelle' => 'Identifiable et mémorable, votre image se doit être distinctive et en cohérence avec vos valeurs et votre discours. De la création du logo au choix de la typographie et des couleurs, nous élaborons ensemble une image qui vous ressemble et qui peut faire la différence.',

                'Charte Graphique' => 'Avec notre charte graphique, vous aurez toutes les clés en main pour maintenir une cohérence visuelle à travers tous vos supports. Ce document est indispensable pour définir l\'ensemble des règles et des normes visuelles à respecter.',

                'Design Réseaux Sociaux' => 'Nous prenons en charge l’aspect graphique de vos réseaux sociaux pour renforcer votre identité de marque et pour s’assurer de sa cohérence. Car nous consommons d’abord avec les yeux, les réseaux sociaux sont très souvent la première vitrine de votre marque. Il est donc primordial de penser à votre social branding, en créant un univers soigné et solide.',

                'Pitchdeck' => 'Laissez-nous transformer vos idées en présentations marketing percutantes qui captivent et convainquent. Présentations PowerPoint ou autre Google Slides, nous nous occupons de créer des templates créatifs, en lien avec votre image et faciles à utiliser.',
            ],
            'knowHow' => 'Des identités uniques et impactantes pour propulser et élever votre marque.',
            'skills' => [
                'Adobe Designer' => 'Nous utilisons la suite Adobe Creative pour donner vie à votre marque. Ces logiciels offrent une gamme d\'outils polyvalents et performants, allant de la conception de logos à la création de documents marketing. Nous pouvons ainsi exprimer pleinement la personnalité et les valeurs de votre marque à travers des designs percutants et professionnels.',

                'Des designs orientés web' => 'Nos designs sont principalement pensés et conçus pour le web. C\'est notre terrain de jeu, et il requiert une approche spécifique. En fusionnant notre expertise des principes graphiques avec les spécificités du monde numérique, nous créons des designs qui renforceront votre image de marque de manière cohérente et engageante.',

                'Cohérence de la marque' => 'L\'identité de votre marque ne se limite pas à un seul support. C\'est pourquoi nous assurons une déclinaison de votre identité visuelle sur une multitude de supports, des réseaux sociaux en passant par les présentations Powerpoint. Chaque interaction avec votre marque est pensée pour garantir une cohérence et un impact maximal.',
            ],
            'icons' => [
                asset('images/tools/design/figma.svg'),
                asset('images/tools/design/adobe-illustrator.svg'),
                asset('images/tools/design/adobe-indesign.svg'),
                asset('images/tools/design/adobe-lightroom.svg'),
                asset('images/tools/design/adobe-photoshop.svg'),
                asset('images/tools/design/procreate.svg'),
            ],
            'faq' => 'branding',
        ];

        return view('app.service', $data);
    }

    public function webdesign()
    {
        $data = [
            'pageTitle' => 'Webdesign & Design Digital',
            'title' => 'Webdesign & <br> Design Digital',
            'description' => 'Nous sommes spécialisés dans la conception de sites web qui attirent et retiennent l\'attention. Nous créons des designs web élégants et nous veillons à ce que l\'architecture soit claire, logique et intuitive pour les utilisateurs. Notre approche est de trouver le juste équilibre entre beauté et fonctionnalité.',
            'color' => 'blue',
            'cardsTitle' => 'Trouver le juste équilibre entre beauté et fonctionnalité pour votre site web.',
            'cards' => [
                'Wireframe / UX' => 'Un wireframe est le squelette de votre interface : une représentation simplifiée qui met en lumière l\'agencement et les fonctionnalités clés de votre site web, sans soucis des détails esthétiques. C\'est le premier pas crucial pour concevoir une expérience utilisateur (UX) optimale, vous permettant de visualiser et de perfectionner la structure de votre projet avant même qu\'il prenne vie.',

                'Prototype / UI' => 'La phase de prototypage nous permet de créer une maquette interactive de votre site. C\'est une représentation concrète de votre projet, permettant de tester et d\'affiner l\'expérience utilisateur (UX), et d’intégrer les éléments visuels avant le développement complet. En résumé, le prototype vous offre un aperçu palpable de votre site web.',

                'Responsive Design' => 'Avec notre design responsive, votre site s\'adaptera harmonieusement à tous les écrans, grands et petits, offrant une expérience fluide et optimale à chaque visiteur, où qu\'il se trouve.',

                'Design System' => 'Donnez à votre marque une base solide avec notre design system et style guide, un ensemble de principes, de composants et de directives pour garder une uniformité et une cohérence graphique sur le site.',
            ],
            'knowHow' => 'Maximiser vos chances de conversion avec un design innovant et impactant.',
            'skills' => [
                'Figma Designer' => 'Nous utilisons le logiciel Figma pour créer des maquettes et des prototypes de sites avant de passer en développement. Grâce à cette approche méthodique, nous pouvons affiner chaque détail et valider l\'expérience utilisateur dès les résultat final parfaitement aligné sur vos attentes et besoins.',

                'Équilibre entre design et fonctionnalité' => 'Nos designs web sont méticuleusement conçus pour trouver le juste équilibre entre un design captivant, une accessibilité web optimale et des optimisations SEO efficaces. En combinant notre expertise graphique avec les axés sur l’expérience utilisateur.',

                'Design 100% personnalisé' => 'Chaque aspect de notre travail est entièrement personnalisé pour répondre aux besoins spécifiques de votre entreprise. Nous ne croyons pas aux solutions préfabriquées ni aux templates. Au lieu de cela, nous nous engageons à créer des designs uniques qui reflètent la personnalité et les valeurs de votre marque.',
            ],
            'icons' => [
                asset('images/tools/design/figma.svg'),
                asset('images/tools/design/adobe-illustrator.svg'),
                asset('images/tools/design/adobe-indesign.svg'),
                asset('images/tools/design/adobe-lightroom.svg'),
                asset('images/tools/design/adobe-photoshop.svg'),
                asset('images/tools/design/procreate.svg'),
            ],
            'faq' => 'webdesign'
        ];

        return view('app.service', $data);
    }

    public function website()
    {
        $data = [
            'pageTitle' => 'Développement Web & Sites Sur Mesure',
            'title' => 'Développement Web & <br> Sites Sur Mesure',
            'description' => 'Nous développons des sites web sur mesure qui rehaussent la présence en ligne de votre marque. Grâce à notre expertise technique, nous transformons vos idées en réalité digitale. Avec nous, votre site sera fonctionnel, sécurisé, performant et parfaitement adapté à vos besoins.',
            'color' => 'purple',
            'cardsTitle' => 'Développer un site web sur mesure qui répond parfaitement à vos besoins et vos envies.',
            'cards' => [
                'Site Vitrine' => 'Un site vitrine est votre carte de visite en ligne. Il offre une première impression de votre entreprise, de vos produits ou services. C\'est une vitrine virtuelle qui attire l\'attention sur ce que vous avez de mieux à offrir, incitant les visiteurs à en découvrir davantage ou à vous contacter directement.',

                'Site E-Commerce' => 'Votre site e-commerce est votre boutique en ligne ouverte 24 heures sur 24, 7 jours sur 7, qui permet à vos visiteurs de découvrir vos produits, d\'ajouter des articles à leur panier et de passer commande en quelques clics. C\'est une plateforme dynamique qui facilite les transactions en ligne, offrant une expérience d\'achat pratique et sécurisée à vos clients.',

                'SEO & Référencement Naturel' => 'Nous optimisons votre site pour les moteurs de recherche afin que votre entreprise soit facilement trouvée par ceux qui la recherchent. Le SEO (ou référencement naturel) désigne l\'ensemble des techniques visant à améliorer votre visibilité en ligne.',

                'Fonctionnalités Sur Mesure' => 'Qu\'il s\'agisse d’ajouter une ligne de code à vos pages ou d’intégrer des outils tiers à votre site, personnalisez-le avec des fonctionnalités sur mesure conçues spécifiquement pour répondre aux besoins uniques de votre entreprise.',

                'Formation & Maintenance' => 'Nous sommes là pour vous accompagner même après le lancement de votre site. Profitez de notre formation personnalisée pour apprendre à gérer votre plateforme en toute autonomie, ainsi que de notre service de maintenance pour assurer le bon fonctionnement continu de votre site.'
            ],
            'knowHow' => 'Nous développons nos sites en suivant les meilleures pratiques web.',
            'skills' => [
                'Technologies à la pointe' => 'Pour vous offrir des sites web à la fois performants et évolutifs, nous nous tenons à jour sur les dernières avancées technologiques en matière de développement. Nous maîtrisons aussi bien les frameworks et librairies d\'animations (React, Symfony, Laravel, GSAP) que les CMS les plus populaires (WordPress, Shopify, etc.).',

                'Simplicité d’utilisation' => 'Nous vous accompagnons afin que vous ayez toutes les clés pour modifier facilement votre site. Notre approche de conception est axée sur la simplicité. Nous croyons qu\'un site web efficace doit être simple à prendre en main, tant pour vous que pour vos visiteurs. Nous nous efforçons donc de créer des interfaces intuitives et accessibles.',

                'Site 100% optimisé' => 'En concevant des sites sur mesure, nous utilisons les meilleures pratiques web pour un bon référencement et de bonnes performances. Nos sites sont non seulement personnalisés, mais également entièrement adaptables et scalables pour faire évoluer votre site en même temps que votre entreprise.',
            ],
            'icons' => [
                asset('images/tools/web/laravel.svg'),
                asset('images/tools/web/symfony.svg'),
                asset('images/tools/web/react.svg'),
                asset('images/tools/web/shopify.svg'),
                asset('images/tools/web/wordpress.svg'),
                asset('images/tools/web/gsap.svg'),
            ],
            'faq' => 'website'
        ];

        return view('app.service', $data);
    }
}
