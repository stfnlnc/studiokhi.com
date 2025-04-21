@extends('base')
@section('title', 'Mentions légales')
@section('description', 'Retrouvez ici nos mentions légales')

@section('content')
    <section class="relative z-10 flex w-full flex-col gap-20  px-4 py-24 lg:px-8 xl:px-16 bg-sk-dark items-start justify-start
     text-sk-light">
        <div class="flex flex-col items-start gap-8">
            <h1>Mentions légales</h1>
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-4">
                    <h2 class="h4">Éditeur du site</h2>
                    <p class="text-body-base">
                        Le présent site est édité par Studio Khi, collectif spécialisé en développement web et webdesign. <br><br>
                        Raison sociale : Stéfan Lancelot / Cynthia Jego <br>
                        Statut juridique : Micro-entreprise <br>
                        Adresse : 44 rue Carnot, 64000 Pau - France <br>
                        Téléphone : 07 65 88 96 83 <br>
                        E-mail : hello@studiokhi.com <br>
                        Numéro d’immatriculation au RCS : 821 759 040 / 828 266 353 <br>
                        Numéro de TVA intracommunautaire : N/A
                    </p>
                </div>


                <div class="flex flex-col gap-4">
                    <h2 class="h4">Responsable de la publication</h2>
                    <p class="text-body-base">
                        Nom : Stéfan Lancelot <br>
                        Téléphone : 07 65 88 96 83 <br>
                        E-mail : hello@studiokhi.com
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="h4">Hébergeur</h2>
                    <p class="text-body-base">
                        Le site est hébergé par : OVH<br>
                        Adresse : 2 rue Kellermann, 59100 Roubaix - France <br>
                        Site internet : <a target="_blank" href="https://www.ovhcloud.com/">www.ovhcloud.com</a></p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="h4">Propriété intellectuelle</h2>
                    <p class="text-body-base">
                        L’ensemble des contenus présents sur ce site (textes, images, graphismes, logos, vidéos, icônes, etc.) est protégé par les
                        lois en vigueur sur la propriété intellectuelle. Toute reproduction, représentation, modification, publication ou adaptation
                        de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite sans l'autorisation
                        préalable de Studio Khi.</p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="h4">Protection des données personnelles</h2>
                    <p class="text-body-base">
                        Studio Khi s’engage à respecter la confidentialité des données personnelles des utilisateurs du site,
                        conformément à la
                        réglementation
                        en vigueur, notamment le Règlement Général sur la Protection des Données (RGPD).
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="h4">Cookies</h2>
                    <p class="text-body-base">
                        Ce site utilise des cookies pour améliorer l’expérience utilisateur et à des fins statistiques.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="h4">Limitation de responsabilité</h2>
                    <p class="text-body-base">
                        Studio Khi ne peut être tenu responsable des dommages directs ou indirects causés au matériel de
                        l’utilisateur lors de l’accès
                        au
                        site, ni des éventuelles interruptions ou erreurs de fonctionnement.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <h2 class="h4">Contact</h2>
                    <p class="text-body-base">
                        Pour toute question relative aux mentions légales, veuillez contacter : <br>
                        Téléphone : 07 65 88 96 83 <br>
                        E-mail : hello@studiokhi.com</p>
                </div>
            </div>
        </div>
    </section>
@endsection
