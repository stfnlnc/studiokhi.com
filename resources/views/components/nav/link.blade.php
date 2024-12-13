@props([
    'mode' => 'light',
    'underline' => false,
    'current' => false
])

<div
    class='group flex w-fit cursor-pointer select-none flex-col items-start bg-transparent text-body-base text-sk-{{ $mode }} transition-colors duration-300'
>
    <a class="py-[0.3rem]">
        {{ $slot }}
    </a>
    @if($underline)
        <div
            class='h-px w-full {{ $current ? 'max-w-full' : 'max-w-0' }} bg-sk-{{ $mode }} transition-all duration-300 group-hover:max-w-full'
        ></div>
    @endif
</div>
