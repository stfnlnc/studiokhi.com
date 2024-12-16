@extends('base')
@section('title', 'Nous Contacter')

@section('content')
    <section class="px-16 w-full h-screen min-h-[700px] bg-sk-dark flex flex-col items-start justify-center
     text-sk-light">
        <div class="flex flex-col items-start gap-8">
            <h1>Nous avons hâte <br> d'écouter votre projet</h1>
            <div class="flex flex-col text-body-base self-end mt-4">
                <a href="tel:0765889683">07 65 88 96 83</a>
                <a href="mailto:hello@studiokhi.com">hello[@]studiokhi.com</a>
                <p>Remote depuis les Pyrénées</p>
            </div>
            <x-button.primary class="self-end" mode="light" icon>Réservez votre appel découverte</x-button.primary>
        </div>
    </section>
@endsection

