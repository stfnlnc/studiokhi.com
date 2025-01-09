@props([
    'color' => 'light'
])

<span {{ $attributes->merge(['class' => 'px-[0.625rem] py-[0.3rem] rounded-[0.375rem] text-body-base text-sk-dark w-fit bg-sk-' . $color]) }}>
    {{ $slot }}
</span>
