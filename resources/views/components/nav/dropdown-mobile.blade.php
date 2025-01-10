<div {{ $attributes }}
     class="transition-transform fixed left-0 top-0 z-10 flex h-[101lvh] w-screen flex-col items-start justify-center overflow-y-auto bg-sk-dark duration-1000  ease-in-out lg:hidden -translate-y-full"
>
    <span class="w-full border-t border-sk-dark-grey"></span>
    <div class="flex flex-col gap-2 my-2 ml-4">
        <x-nav.link class="text-sk-light h2" :current="str_contains($route, 'app.service.')" mode="dark"
                    underline>
            Services
        </x-nav.link>
        <x-button.secondary class="link-loader ml-8" href="{{ route('app.service.branding') }}" full icon mode="light">Branding & <br/> Direction
            Artistique
        </x-button.secondary>
        <x-button.secondary class="link-loader ml-8" href="{{ route('app.service.webdesign') }}" full icon mode="light">Webdesign & <br/> Design
            Digital
        </x-button.secondary>
        <x-button.secondary class="link-loader ml-8 mb-8" href="{{ route('app.service.website') }}" full icon mode="light">Développement Web & <br/>
            Sites
            Sur Mesure
        </x-button.secondary>
    </div>


    <span class="w-full border-t border-sk-dark-grey"></span>
    <x-nav.link class="link-loader w-full text-sk-light h2 my-2 ml-4" :current="$route === 'app.work'"
                :href="route('app.work')"
                mode="dark"
                underline>Réalisations
    </x-nav.link>
    <span class="w-full border-t border-sk-dark-grey"></span>
    <x-nav.link class="link-loader text-sk-light h2 my-2 ml-4" :current="$route === 'app.faq'" :href="route('app.faq')"
                mode="dark" underline>FAQ
    </x-nav.link>
    <span class="w-full border-t border-sk-dark-grey"></span>
    <x-nav.link class="link-loader text-sk-light h2 my-2 ml-4" :current="$route === 'app.studio'"
                :href="route('app.studio')"
                mode="dark" underline>Studio
    </x-nav.link>
    <span class="w-full border-t border-sk-dark-grey"></span>
    <x-nav.link class="link-loader text-sk-light h2 my-2 ml-4" :current="$route === 'app.posts'"
                :href="route('app.posts')"
                mode="dark" underline>Articles
    </x-nav.link>
    <span class="w-full border-t border-sk-dark-grey"></span>
</div>
