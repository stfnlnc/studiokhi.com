<div x-data="{ show: true }"
     x-show="show"
     x-transition
     x-init="setTimeout(() => show = false, 3000)"
     class="
     flex items-center p-4 mb-4 text-sm  rounded-lg bg-zinc-50 dark:bg-zinc-800
     @if($status === 'success') text-green-800  dark:text-green-400 @endif
     @if($status === 'info') text-blue-800  dark:text-blue-400 @endif
     @if($status === 'warning') text-amber-800  dark:text-amber-400 @endif
     @if($status === 'danger') text-red-800  dark:text-red-400 @endif
     "
     role="alert">
    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path
            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
    </svg>
    <div>
        {{ $slot }}
    </div>
</div>