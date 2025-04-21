@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-xs uppercase text-zinc-400 dark:text-zinc-400']) }}>
    {{ $value ?? $slot }}
</label>
