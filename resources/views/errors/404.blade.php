@extends('base')
@section('title', 'Erreur 404')

@section('content')
    <section class="relative z-10 flex w-full flex-col gap-20  px-4 py-24 lg:px-8 xl:px-16 h-screen min-h-[700px] bg-sk-dark items-start justify-center
     text-sk-light">
        <div class="flex flex-col items-start gap-8">
            <h1>Oups ! On dirait que vous vous êtes trompés de chemin...</h1>
            <x-button.primary :href="route('app.index')" class="" mode="light" icon>Retourner sur le site</x-button.primary>
        </div>
    </section>
@endsection