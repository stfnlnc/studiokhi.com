@extends('base')

@section('title', $work->title)

@vite(['resources/js/page-work.js'])

@section('content')
    <section class="relative z-10 w-full bg-sk-light">
        <img id="pin-image" class="w-full h-[100lvh] object-cover object-center"
             src="{{ asset('uploads/works/' . $work->slug . '/1536/' . $work->image_path) }}" alt="">
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 pb-36 bg-sk-light text-sk-dark border-sk-light-grey lg:px-8 xl:px-16 -mt-12">
        <h1 class="uppercase">{{ $work->title }}</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col gap-8 mb-16">
                <p class="text-body-lg">Résumé du projet</p>
                <div class="flex flex-col gap-2">
                    <x-tag.primary color="blue">Branding</x-tag.primary>
                    <x-tag.primary color="purple">Branding</x-tag.primary>
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
        <section class="relative z-10 flex w-full flex-col gap-20 px-4 pb-36 bg-sk-light text-sk-dark border-sk-light-grey lg:px-8 xl:px-16 -mt-1">
            @foreach($work->images as $image)
                @if($image->image_format === 'webp')
                    <picture>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/full/' . $image->image_path) }}" media="(min-width: 1536px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/1536/' . $image->image_path) }}" media="(min-width: 1280px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/1280/' . $image->image_path) }}" media="(min-width: 960px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/960/' . $image->image_path) }}" media="(min-width: 640px)"/>
                        <source srcset="{{ asset('uploads/works/' . $work->slug . '/640/' . $image->image_path) }}" media="(min-width: 480px)"/>
                        <img class="rounded-2xl w-full h-auto"
                             src="{{ asset('uploads/posts/' . $work->slug . '/480/' . $image->image_path) }}" alt="{{ $work->title }}"/>
                    </picture>
                @else
                    <video class="rounded-2xl w-full h-auto" src="{{ asset('uploads/' . $work->slug . '/mp4/' . $image->image_path) }}" autoplay
                           playsinline muted loop></video>
                @endif
            @endforeach
        </section>
    @endif
@endsection
