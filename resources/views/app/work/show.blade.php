@extends('base')

@section('title', $work->title)

@vite(['resources/js/page-work.js'])

@section('content')
    <section class="relative z-10 w-full bg-sk-light">
        <picture>
            @foreach(config('app.image_sizes') as $size)
                <source
                    srcset="{{ asset('uploads/works/' . $work->slug . '/' . $size . '/' . $work->image_path) }}"
                    media="(max-width: {{ $size }}px)"/>
            @endforeach
            <img loading="lazy" id="pin-image" class="w-full h-[100lvh] object-cover object-center"
                 src="{{ asset('uploads/works/' . $work->slug . '/full/' . $work->image_path) }}"
                 alt="{{ $work->title }}"/>
        </picture>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 pb-36 bg-sk-light text-sk-dark border-sk-light-grey lg:px-8 xl:px-16 -mt-12">
        <h1 class="uppercase">{{ $work->title }}</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col gap-8 mb-16">
                <p class="text-body-lg">Résumé du projet</p>
                <div class="flex flex-col gap-2">
                    @foreach($work->tags as $tag)
                        <x-tag.primary color="{{ $tag->color }}">{{ $tag->name }}</x-tag.primary>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <p class="h3">{{ $work->subtitle }}</p>
                <div class="text-body-base text-sk-grey">{!! $work->description !!}</div>
                <div class="flex flex-col w-full text-body-base">
                    <div class="flex flex-row justify-between border-y border-sk-light-grey py-4">
                        <p>Catégorie</p>
                        <p>{{ $work->category }}</p>
                    </div>
                    <div class="flex flex-row justify-between border-b border-sk-light-grey py-4">
                        <p>Type</p>
                        <p>{{ $work->type }}</p>
                    </div>
                    <div class="flex flex-row justify-between border-b border-sk-light-grey py-4">
                        <p>Date</p>
                        <p>{{ $work->date }}</p>
                    </div>
                </div>
                @if($work->url)
                    <x-button.primary href="{{ $work->url }}" target="_blank" mode="dark" icon>Voir le site</x-button.primary>
                @endif
            </div>
        </div>
    </section>
    @if($work->images)
        <section
            class="relative z-10 flex w-full flex-col gap-8 lg:gap-20 px-4 pb-36 bg-sk-light text-sk-dark border-sk-light-grey lg:px-8 xl:px-16 -mt-1">
            @foreach($work->images->sortBy('order') as $image)
                @if($image->image_format === 'webp')
                    <picture>
                        @foreach(config('app.image_sizes') as $size)
                            <source
                                srcset="{{ asset('uploads/works/' . $work->slug . '/' . $size . '/' . $image->image_path) }}"
                                media="(max-width: {{ $size }}px)"/>
                        @endforeach
                        <img loading="lazy" class="rounded-2xl w-full h-auto"
                             src="{{ asset('uploads/works/' . $work->slug . '/full/' . $image->image_path) }}"
                             alt="{{ $work->title }}"/>
                    </picture>
                @else
                    <video class="rounded-2xl w-full h-auto" src="{{ asset('uploads/' . $work->slug . '/mp4/' . $image->image_path) }}" autoplay
                           playsinline muted loop></video>
                @endif
            @endforeach
        </section>
    @endif
    @include('app.partials.cta-light', ['href' => config('app.calendly')])
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                Découvrir un autre projet
            </p>
            <div class="flex w-full flex-col gap-14 lg:w-3/5">
                <div class="h3 w-full md:w-4/5">
                    Vous avez encore deux minutes ?
                </div>
            </div>
        </div>
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
                        <div class="top-5 left-5 flex flex-row gap-2 mt-2 lg:absolute">
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
