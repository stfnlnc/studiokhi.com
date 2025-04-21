@props([
    'full' => false,
    'mode' => 'light',
    'icon' => false
])

@php
    $classes = 'group select-none flex  cursor-pointer flex-row border-b border-sk-' . $mode . ' bg-transparent py-[0.3rem] text-body-base text-sk-' . $mode . ' transition-colors duration-300 hover:border-sk-grey hover:text-sk-grey ';
    $classes .= $full ? 'w-72 items-end justify-between xl:w-96' : 'w-fit items-center gap-[8.4375rem]';
    $iconClasses = 'mb-1 h-[1rem] lg:h-[1.1875rem] 2xl:h-[1.1875vw] w-[1rem] lg:w-[1.1875rem] 2xl:w-[1.1875vw] stroke-sk-' . $mode . ' transition-all duration-300 group-hover:stroke-sk-grey group-hover:translate-x-1 group-hover:-translate-y-1'
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
    @if($icon)
        <svg
            {{ $attributes->merge(['class' => $iconClasses]) }}
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
    @endif
</a>
