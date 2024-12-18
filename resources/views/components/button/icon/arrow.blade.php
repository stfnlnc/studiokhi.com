@php
    $classes = 'h-[1rem] lg:h-[1.1875rem] 2xl:h-[1.1875vw] w-[1rem] lg:w-[1.1875rem] 2xl:w-[1.1875vw] transition-colors duration-300 ';
    $classes .= $mode === 'dark' || $mode === 'darker' ? 'stroke-sk-light' : 'stroke-sk-dark group-hover:stroke-sk-light';
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
