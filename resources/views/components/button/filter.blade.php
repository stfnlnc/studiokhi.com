@php
    $classes =
    'group flex w-fit h-fit cursor-pointer select-none flex-row items-center gap-[0.1875rem] rounded-[0.375rem] border px-[0.625rem] py-[0.3rem] text-body-base transition-colors duration-300 border-sk-dark text-sk-dark bg-sk-transparent hover:bg-sk-dark hover:border-sk-light hover:text-sk-light';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
