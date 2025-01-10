@props([
    'title' => 'Prêts à nous partager votre projet ?',
    'description' => 'Réservez votre appel découverte',
    'color' => 'beige',
    'href' => ''
])

<section
    class="relative z-10 flex w-full flex-col lg:flex-row justify-start gap-8 px-4 py-24 {{ $color ? 'bg-sk-beige' : 'bg-sk-' . $color }} lg:px-8 xl:px-16 text-center lg:text-left -mt-2">
    <div class="h3 w-full lg:w-1/2">{{ $title }}</div>
    <x-button.primary :href="$href" class="lg:ml-auto self-center lg:self-end" mode="darker" icon>{{ $description }}
    </x-button.primary>
</section>
