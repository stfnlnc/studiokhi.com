@extends('base')
@section('title', 'Nos Réalisations')

@vite(['resources/js/filter.js'])

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-12 lg:gap-20 px-4 pt-36 pb-12 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <h1>Nos Réalisations</h1>
        <p class="text-body-base w-full lg:w-1/2 self-end">Découvrez une série de projets sur lesquels nous avons travaillé, allant de la création
            d'identités
            visuelles à la
            conception de sites web.
            Chaque projet est une histoire à part entière, reflétant notre passion pour le design et notre volonté de satisfaire nos clients. </p>
    </section>
    <section
        class="relative z-10 flex w-full flex-row justify-center flex-wrap gap-8 px-4 py-8 lg:py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        @foreach($tags as $key => $tag)
            <x-button.filter id="{{ $tag->slug }}"
                             class="filter shrink-0">{{ $tag->name }}</x-button.filter>
        @endforeach
    </section>
    <section class="relative z-10 w-full gap-20 px-4 py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mg:gap-5">
            @foreach($works as $work)
                <div class="@foreach($work->tags as $tag) {{ $tag->slug . '-show' }} @endforeach show-item flex flex-col items-start gap-2">
                    <a class="relative link-loader" href="{{ route('app.work.show', $work->slug) }}">
                        <picture>
                            @foreach(config('app.image_sizes') as $size)
                                <source
                                    srcset="{{ asset('uploads/works/' . $work->slug . '/' . $size . '/' . $work->image_path) }}"
                                    media="(max-width: {{ $size }}px)"/>
                            @endforeach
                            <img loading="lazy" class="aspect-square rounded-3xl object-cover object-center"
                                 src="{{ asset('uploads/works/' . $work->slug . '/full/' . $work->image_path) }}"
                                 alt="{{ $work->title }}"/>
                        </picture>
                        <div class="top-5 left-5 flex flex-row gap-2 lg:absolute">
                            @foreach($work->tags as $tag)
                                <x-tag.primary color="{{ $tag->color }}">{{ $tag->name }}</x-tag.primary>
                            @endforeach
                        </div>
                    </a>
                    <a href="{{ route('app.work.show', $work->slug) }}" class="link-loader mt-2 w-3/4 text-body-lg">
                        {{ $work->title }}
                    </a>
                    <x-button.secondary href="{{ route('app.work.show', $work->slug) }}" class="link-loader" mode="dark">Voir le projet
                    </x-button.secondary>
                </div>
            @endforeach
        </div>
    </section>
@endsection
