@extends('base')
@section('title', 'Nos Réalisations')

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-36 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <h1>Nos Réalisations</h1>
        <p class="text-body-base w-full lg:w-1/2 self-end">Découvrez une série de projets sur lesquels nous avons travaillé, allant de la création
            d'identités
            visuelles à la
            conception de sites web.
            Chaque projet est une histoire à part entière, reflétant notre passion pour le design et notre volonté de satisfaire nos clients. </p>
    </section>
    <section class="relative z-10 flex w-full flex-row gap-20 px-4 py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">

    </section>
    <section class="relative z-10 w-full gap-20 px-4 py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mg:gap-5">
            <div class="flex flex-col items-start gap-4">
                <a class="relative" href="">
                    <img class="aspect-square rounded-3xl object-cover object-center"
                         src="https://static.vecteezy.com/system/resources/previews/004/141/669/non_2x/no-photo-or-blank-image-icon-loading-images-or-missing-image-mark-image-not-available-or-image-coming-soon-sign-simple-nature-silhouette-in-frame-isolated-illustration-vector.jpg"
                         alt="">
                    <div class="top-5 left-5 flex flex-row gap-2 lg:absolute">
                        <x-tag.primary color="blue">Développement web</x-tag.primary>
                        <x-tag.primary color="purple">Branding</x-tag.primary>
                    </div>
                </a>
                <a href="" class="mt-2 w-3/4 text-body-lg">
                    5 ways the power of Ai might impact your corporate vision
                </a>
                <x-button.secondary mode="dark">En savoir plus</x-button.secondary>
            </div>
        </div>
    </section>
@endsection
