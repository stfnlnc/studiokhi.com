@props([
    'method' => 'put',
    'route' => '',
])

<section>
    <form method="post" action="{{ route($route, $work) }}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method($method)

        <div>
            <x-input-label for="title" :value="__('Title')"/>
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $work->title)"
                          autofocus autocomplete="title"/>
            <x-input-error class="mt-2" :messages="$errors->get('title')"/>
        </div>

        <div class="flex flex-col gap-2">
            <x-input-label for="tags" :value="__('Tags')"/>
            <div class="flex flex-row gap-4">
                @foreach($tags as $tag)
                    <div class="flex items-center mb-4">
                        <input name="tags[]" @if(in_array($tag->id, $work->tags->pluck('id')->toArray())) checked @endif id="{{ $tag->slug }}"
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

            <div class="flex flex-col gap-1">
                <label for="images"
                       class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300">Images
                    multiples</label>
                <x-text-input id="images" name="images[]" type="file" class="text-xs" multiple="multiple"
                              autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('images[]')"/>
            </div>
        </div>

        <div>
            <x-input-label for="subtitle" :value="__('Subtitle')"/>
            <x-text-input id="subtitle" name="subtitle" type="text" class="mt-1 block w-full"
                          :value="old('subtitle', $work->subtitle)" autocomplete="subtitle"/>
            <x-input-error class="mt-2" :messages="$errors->get('subtitle')"/>
        </div>

        <div>
            <x-input-label for="category" :value="__('Category')"/>
            <x-text-input id="category" name="category" type="text" class="mt-1 block w-full"
                          :value="old('category', $work->category)" autocomplete="category"/>
            <x-input-error class="mt-2" :messages="$errors->get('category')"/>
        </div>
        <div>
            <x-input-label for="type" :value="__('Type')"/>
            <x-text-input id="type" name="type" type="text" class="mt-1 block w-full"
                          :value="old('type', $work->type)" autocomplete="type"/>
            <x-input-error class="mt-2" :messages="$errors->get('type')"/>
        </div>

        <div>
            <x-input-label for="date" :value="__('Date')"/>
            <x-text-input id="date" name="date" type="number" class="mt-1 block w-full"
                          :value="old('date', $work->date)" autocomplete="date" min="1900" max="2099" step="1"/>
            <x-input-error class="mt-2" :messages="$errors->get('date')"/>
        </div>

        <div>
            <x-input-label for="url" :value="__('URL')"/>
            <x-text-input id="url" name="url" type="text" class="mt-1 block w-full"
                          :value="old('url', $work->url)" autocomplete="url"/>
            <x-input-error class="mt-2" :messages="$errors->get('url')"/>
        </div>

        <div>
            <x-input-label for="description" :value="__('Description')"/>
            <x-textarea id="description" name="description" class="mt-1 block w-full"
                        autocomplete="description">{{ old('description', $work->description) }}</x-textarea>
            <x-input-error class="mt-2" :messages="$errors->get('description')"/>
        </div>

        <div class="flex items-center">
            <input type="hidden" name="online" value="0">
            <input id="online" type="checkbox" value="1" name="online"
                   class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
            <label for="online" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Mettre en ligne</label>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>
