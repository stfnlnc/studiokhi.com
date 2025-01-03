@php use Carbon\Carbon; @endphp
@extends('base')

@section('title', $post->title)

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
@endsection
