@php use Carbon\Carbon; @endphp
@extends('base')

@section('title', $post->title)
@section('description', $post->title)

@section('content')

    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 lg:py-48 bg-sk-light text-sk-dark border-b border-sk-light-grey lg:px-8 xl:px-16">
        <h1>{{ $post->title }}</h1>
    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 lg:py-36 bg-sk-light text-sk-dark border-sk-light-grey lg:px-8 xl:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="flex flex-col gap-8 mb-16">
                <div class="flex flex-col gap-2">
                    @foreach($post->tags as $tag)
                        <x-tag.primary color="{{ $tag->color }}">{{ $tag->name }}</x-tag.primary>
                    @endforeach
                </div>
                <div class="flex flex-col gap-2">
                    <p class="text-body-base">Par {{ $post->author }}</p>
                    @php
                        $formattedDate = '';
                        if ($post->published_at) {
                            $formattedDate = Carbon::createFromFormat('Y-m-d h:i:s', $post->published_at)->format('d/m/Y');
                        }
                    @endphp
                    <p class="text-body-base">{{ $formattedDate }}</p>
                </div>
            </div>
            <div class="flex flex-col gap-12 text-body-base">
                {!! $post->body !!}
            </div>
        </div>
    </section>
    @include('app.partials.cta-light', ['href' => config('app.calendly')])
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                Lire un autre article
            </p>
            <div class="flex w-full flex-col gap-14 lg:w-3/5">
                <div class="h3 w-full md:w-4/5">
                    Vous avez encore deux minutes ?
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mg:gap-5">
            @foreach($posts as $post)
                <div class="flex flex-col items-start gap-4">
                    <a href="{{ route('app.post.show', $post->slug) }}" class="link-loader relative">
                        <picture>
                            @foreach(config('app.image_sizes') as $size)
                                <source
                                    srcset="{{ asset('uploads/posts/' . $post->slug . '/' . $size . '/' . $post->image_path) }}"
                                    media="(max-width: {{ $size }}px)"/>
                            @endforeach
                            <img loading="lazy" class="aspect-square rounded-3xl object-cover object-center"
                                 src="{{ asset('uploads/posts/' . $post->slug . '/full/' . $post->image_path) }}"
                                 alt="{{ $post->title }}"/>
                        </picture>
                        <div class="top-5 left-5 flex flex-row gap-2 mt-2 lg:absolute">
                            @foreach($post->tags as $tag)
                                <x-tag.primary color="{{ $tag->color }}">{{ $tag->name }}</x-tag.primary>
                            @endforeach
                        </div>
                    </a>
                    <a href="{{ route('app.post.show', $post->slug) }}" class="link-loader mt-2 w-3/4 text-body-lg">
                        {{ $post->title }}
                    </a>
                    <x-button.secondary href="{{ route('app.post.show', $post->slug) }}" class="link-loader">Lire l'article</x-button.secondary>
                </div>
            @endforeach
        </div>
    </section>
@endsection
