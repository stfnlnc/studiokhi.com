<div x-data="{ show: true }"
     x-show="show"
     x-transition
     x-init="setTimeout(() => show = false, 5000)"
     class="
     fixed top-2 right-4 shadow-lg flex items-center gap-2 p-2 my-2 text-sm  rounded-lg bg-zinc-50 dark:bg-zinc-800 w-fit border
     @if($status === 'success') text-green-800  dark:text-green-400 border-green-800 dark:border-green-400 @endif
     @if($status === 'info') text-blue-800  dark:text-blue-400 border-blue-800 dark:border-blue-400 @endif
     @if($status === 'warning') text-amber-800  dark:text-amber-400 border-amber-800 dark:border-amber-400 @endif
     @if($status === 'danger') text-red-800  dark:text-red-400 border-red-800 dark:border-red-400 @endif
     "
     role="alert">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M12 8V12M12 16H12.01M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <div>
        {{ $slot }}
    </div>
</div>
