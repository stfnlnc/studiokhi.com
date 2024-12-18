<div {{ $attributes }}
     class="px-16 transition-transform fixed left-0 top-0 z-10 hidden h-[101lvh] w-screen flex-row items-center justify-center overflow-y-auto bg-sk-dark duration-1000 ease-in-out lg:flex -translate-y-full"
>
    <div class="grid grid-cols-3 gap-14">
        <div class="flex flex-col text-sk-light">
            <span>01</span>
            <x-button.secondary class="link-loader" href="{{ route('app.service.branding') }}" full icon mode="light">Branding & <br/> Direction
                Artistique
            </x-button.secondary>
            <ul class="mt-6 text-sk-grey">
                <li>Moodboards</li>
                <li>Logo</li>
                <li>Identité Visuelle</li>
                <li>Charte Graphique</li>
                <li>Design Réseaux Sociaux</li>
                <li>Pitchdeck</li>
            </ul>
        </div>
        <div class="flex flex-col text-sk-light">
            <span>02</span>
            <x-button.secondary class="link-loader" href="{{ route('app.service.webdesign') }}" full icon mode="light">Webdesign & <br/> Design
                Digital
            </x-button.secondary>
            <ul class="mt-6 text-sk-grey">
                <li>Webdesign</li>
                <li>UX/UI Design</li>
                <li>Wireframe</li>
                <li>Maquettes & Prototypes</li>
                <li>Design System</li>
            </ul>
        </div>
        <div class="flex flex-col text-sk-light">
            <span>03</span>
            <x-button.secondary class="link-loader" href="{{ route('app.service.website') }}" full icon mode="light">Développement Web & <br/> Sites
                Sur Mesure
            </x-button.secondary>
            <ul class="mt-6 text-sk-grey">
                <li>Site Vitrine</li>
                <li>Site E-Commerce</li>
                <li>Front-End & Back-End</li>
                <li>Fonctionnalités SUr Mesure</li>
                <li>SEO & Référencement Naturel</li>
                <li>Formation & Maintenance</li>
            </ul>
        </div>
    </div>
</div>
