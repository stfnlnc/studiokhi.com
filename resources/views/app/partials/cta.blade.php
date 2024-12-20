@props([
    'title' => 'Prêts à nous partager votre projet ?',
    'description' => 'Réservez votre appel découverte',
    'color' => 'beige',
    'href' => ''
])

<section
    class="relative z-10 flex w-full flex-col items-center gap-16 px-4 py-24 bg-sk-{{ $color }} lg:px-8 xl:px-16 text-center">
    <div class="h2 w-full lg:w-2/3">{{ $title }}</div>
    <x-button.primary :href="$href" mode="darker" icon>{{ $description }}</x-button.primary>
</section>
