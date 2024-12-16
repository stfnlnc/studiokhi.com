@props([
    'mode' => 'light',
    'icon' => false
])

@php
    $classes =
    'group flex w-fit cursor-pointer select-none flex-row items-center gap-[0.1875rem] rounded-[0.375rem] border px-[0.625rem] py-[0.3rem] text-body-base transition-colors duration-300 ';
     $classes .=
     $mode === 'dark'
     ? 'border-sk-light text-sk-light bg-sk-dark hover:border-sk-grey hover:bg-sk-grey'
     : 'border-sk-dark text-sk-dark bg-sk-light hover:bg-sk-dark hover:border-sk-light hover:text-sk-light';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    @if($icon)
        <x-button.icon.arrow mode="{{ $mode }}"/>
    @endif
</a>
