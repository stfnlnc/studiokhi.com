@props([
    'title' => 'Prêts à nous partager votre projet ?',
    'description' => 'Réservez votre appel découverte',
    'color' => 'beige',
    'href' => ''
])

<section
    class="relative z-10 flex w-full flex-col items-center gap-16 px-4 py-24 {{ $color ? 'bg-sk-beige' : 'bg-sk-' . $color }} lg:px-8 xl:px-16 text-center -mt-2">
    <div class="h2 w-full lg:w-2/3">{{ $title }}</div>
    <x-button.primary target="_blank" :href="$href" mode="darker" icon>{{ $description }}</x-button.primary>
</section>
