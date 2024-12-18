@extends('base')
@section('title', 'FAQ')

@section('content')
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-36 lg:py-48 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">
        <h1>Des questions ?</h1>
        <p class="text-body-base w-full lg:w-1/2 self-end">
            Nous avons peut-être déjà les réponses à vos questions ! Ne manquez pas notre FAQ pour trouver les réponses dont vous avez besoin.
        </p>
    </section>
    <section class="relative z-10 flex w-full flex-row gap-20 px-4 py-16 bg-sk-light text-sk-dark lg:px-8 xl:px-16 border-b border-sk-light-grey">

    </section>
    <section
        class="relative z-10 flex w-full flex-col gap-20 px-4 py-24 bg-sk-light lg:px-8 xl:px-16">
        <div class="flex flex-col lg:flex-row gap-4">
            <p class="w-full lg:w-2/5 text-body-lg">
                FAQ
            </p>
            <div class="flex w-full flex-col lg:w-3/5">
                <div class="flex flex-col">
                    <div class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between  py-5 text-body-lg">
                            Pourquoi faire confiance au Studio Khi ?
                            <x-icon.plus class="h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam animi aperiam
                            commodi, corporis dolorem ea fugit impedit ipsum labore nobis obcaecati omnis quod soluta
                            tempora totam vero voluptate.
                        </p>
                    </div>
                    <div
                        class="w-full border-b faq border-sk-light-grey">
                        <div
                            class="flex cursor-pointer flex-row items-center justify-between py-5 text-body-lg">
                            Pourquoi faire confiance au Studio Khi ?
                            <x-icon.plus class="h-3 w-3 rotate-45 transition-transform duration-300 faq-plus"/>
                        </div>
                        <p class="hidden w-full md:w-3/4 pb-5 faq-answer text-sk-grey text-body-sm">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam animi aperiam
                            commodi, corporis dolorem ea fugit impedit ipsum labore nobis obcaecati omnis quod soluta
                            tempora totam vero voluptate. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                            adipisci aliquam animi aperiam
                            commodi, corporis dolorem ea fugit impedit ipsum labore nobis obcaecati omnis quod soluta
                            tempora totam vero voluptate.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
