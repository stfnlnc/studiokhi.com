@extends('base')

@section('title', $post->title)

@section('content')

    <section class="bg-sk-light w-full h-screen flex flex-row items-center">

        <div class="flex flex-col">
            {!! $post->body !!}
            
        </div>

    </section>

@endsection
