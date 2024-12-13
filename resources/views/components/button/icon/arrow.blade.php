@php
    $classes = 'h-[1.125rem] w-[1.125rem] transition-colors duration-300 ';
    $classes .= $mode === 'dark' ? 'stroke-sk-light' : 'stroke-sk-dark group-hover:stroke-sk-light';
@endphp

<svg
    {{ $attributes->merge(['class' => $classes]) }}
    width="20px"
    height="20px"
    viewBox="0 0 24 24"
    xmlns="http://www.w3.org/2000/svg"
>
    <path
        d="M6 18L18 6M18 6H10M18 6V14"
        stroke-width="2"
        stroke-linecap="round"
        stroke-linejoin="round"
    />
</svg>
