@php use Carbon\Carbon; @endphp
@props([
    'method' => 'put',
    'route' => '',
])

<section>
    <form method="post" action="{{ route($route, $post) }}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method($method)

        <div>
            <x-input-label for="title" :value="__('Title')"/>
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $post->title)"
                          autofocus autocomplete="title"/>
            <x-input-error class="mt-2" :messages="$errors->get('title')"/>
        </div>

        <div class="flex flex-col gap-2">
            <x-input-label for="tags" :value="__('Tags')"/>
            <div class="flex flex-row gap-4">
                @foreach($tags as $tag)
                    <div class="flex items-center mb-4">
                        <input name="tags[]" @if(in_array($tag->id, $post->tags->pluck('id')->toArray())) checked @endif id="{{ $tag->slug }}"
                               type="checkbox"
                               value="{{ $tag->id }}"
                               class="w-4 h-4 text-indigo-600 bg-zinc-100 border-zinc-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600">
                        <label for="{{ $tag->slug }}" class="ms-2 text-sm font-medium text-zinc-900 dark:text-gray-300">{{ $tag->name }}</label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex flex-row gap-2">
            <div class="flex flex-col gap-1">
                <label for="image"
                       class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                       autofocus>Image d'en tête</label>
                <x-text-input id="image" name="image" type="file" class="text-xs"
                              autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('image')"/>
            </div>
        </div>

        <div>
            <x-input-label for="author" :value="__('Author')"/>
            <x-text-input id="author" name="author" type="text" class="mt-1 block w-full"
                          :value="old('author', $post->author)" autocomplete="author"/>
            <x-input-error class="mt-2" :messages="$errors->get('author')"/>
        </div>

        <div>
            <x-input-label for="body" :value="__('Body')"/>
            <textarea class="tinyMce" id="body" name="body">{{ old('body', $post->body) }}</textarea>
            <x-input-error class="mt-2" :messages="$errors->get('body')"/>
        </div>

        <div>
            @php
                $formattedDate = date('Y-m-d');
                if ($post->published_at) {
                    $formattedDate = Carbon::createFromFormat('Y-m-d h:i:s', $post->published_at)->format('Y-m-d');
                }
            @endphp
            <x-input-label for="published_at" :value="__('Date')"/>
            <x-text-input id="published_at" name="published_at" type="date" class="mt-1 block w-full"
                          :value="old('published_at', $formattedDate)"/>
            <x-input-error class="mt-2" :messages="$errors->get('published_at')"/>
        </div>
        <div class="flex items-center">
            <input type="hidden" name="is_published" value="0">
            <input id="is_published" type="checkbox" value="1" name="is_published"
                   class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
            <label for="is_published" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Publier</label>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
