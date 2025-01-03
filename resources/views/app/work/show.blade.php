@extends('base')

@section('title', $work->title)

@vite(['resources/js/page-work.js'])

@section('content')
    <section class="relative z-10 w-full bg-sk-light">
        <img id="pin-image" class="w-full h-[100lvh] object-cover object-center"
             src="{{ asset('storage/' . $work->slug . '/1536/' . $work->image_path) }}" alt="">
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 pb-36 bg-sk-light text-sk-dark border-sk-light-grey lg:px-8 xl:px-16 -mt-12">
        <h1 class="uppercase">{{ $work->title }}</h1>
        <div class="grid grid-cols-2">
            <div class="flex flex-col gap-8">
                <p class="text-body-lg">Résumé du projet</p>
                <div class="flex flex-col gap-2">
                    <x-tag.primary color="blue">Branding</x-tag.primary>
                    <x-tag.primary color="purple">Branding</x-tag.primary>
                </div>
            </div>
            <div class="flex flex-col gap-12">
                <p class="h3">{{ $work->subtitle }}</p>
                <p class="text-body-base text-sk-grey">{{ $work->description }}</p>
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
                    <img class="rounded-2xl w-full h-auto" src="{{ asset('storage/' . $work->slug . '/1536/' . $image->image_path) }}" alt="">
                @else
                    <video class="rounded-2xl w-full h-auto" src="{{ asset('storage/' . $work->slug . '/mp4/' . $image->image_path) }}" autoplay
                           playsinline muted loop></video>
                @endif
            @endforeach
        </section>
    @endif
@endsection
