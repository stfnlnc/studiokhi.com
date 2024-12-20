<div x-data="{ show: true }"
     x-show="show"
     x-transition
     x-init="setTimeout(() => show = false, 5000)"
     class="
     fixed top-2 right-2 flex items-center p-2 my-2 text-sm  rounded-lg bg-zinc-50 dark:bg-zinc-800 w-fit border
     @if($status === 'success') text-green-800  dark:text-green-400 border-green-800 dark:border-green-400 @endif
     @if($status === 'info') text-blue-800  dark:text-blue-400 border-blue-800 dark:border-blue-400 @endif
     @if($status === 'warning') text-amber-800  dark:text-amber-400 border-amber-800 dark:border-amber-400 @endif
     @if($status === 'danger') text-red-800  dark:text-red-400 border-red-800 dark:border-red-400 @endif
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
