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
                       class="inline-flex gap-2 items-center cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                       autofocus>
                    <svg class="fill-white stroke-current" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.2 21H6.93137C6.32555 21 6.02265 21 5.88238 20.8802C5.76068 20.7763 5.69609 20.6203 5.70865 20.4608C5.72312 20.2769 5.93731 20.0627 6.36569 19.6343L14.8686 11.1314C15.2646 10.7354 15.4627 10.5373 15.691 10.4632C15.8918 10.3979 16.1082 10.3979 16.309 10.4632C16.5373 10.5373 16.7354 10.7354 17.1314 11.1314L21 15V16.2M16.2 21C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2M16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V7.8C3 6.11984 3 5.27976 3.32698 4.63803C3.6146 4.07354 4.07354 3.6146 4.63803 3.32698C5.27976 3 6.11984 3 7.8 3H16.2C17.8802 3 18.7202 3 19.362 3.32698C19.9265 3.6146 20.3854 4.07354 20.673 4.63803C21 5.27976 21 6.11984 21 7.8V16.2M10.5 8.5C10.5 9.60457 9.60457 10.5 8.5 10.5C7.39543 10.5 6.5 9.60457 6.5 8.5C6.5 7.39543 7.39543 6.5 8.5 6.5C9.60457 6.5 10.5 7.39543 10.5 8.5Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Image d'en tête
                </label>
                <x-text-input id="image" name="image" type="file" class="text-xs shadow-none"
                              autofocus/>
                <x-input-error class="mt-2" :messages="$errors->get('image')"/>
            </div>

            <div class="flex flex-col gap-1">
                <label for="images"
                       class="inline-flex gap-2 items-center cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300">
                    <svg class="fill-white stroke-current" width="20" height="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12.5 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21H17C17.93 21 18.395 21 18.7765 20.8978C19.8117 20.6204 20.6204 19.8117 20.8978 18.7765C21 18.395 21 17.93 21 17M19 8V2M16 5H22M10.5 8.5C10.5 9.60457 9.60457 10.5 8.5 10.5C7.39543 10.5 6.5 9.60457 6.5 8.5C6.5 7.39543 7.39543 6.5 8.5 6.5C9.60457 6.5 10.5 7.39543 10.5 8.5ZM14.99 11.9181L6.53115 19.608C6.05536 20.0406 5.81747 20.2568 5.79643 20.4442C5.77819 20.6066 5.84045 20.7676 5.96319 20.8755C6.10478 21 6.42628 21 7.06929 21H16.456C17.8951 21 18.6147 21 19.1799 20.7582C19.8894 20.4547 20.4547 19.8894 20.7582 19.1799C21 18.6147 21 17.8951 21 16.456C21 15.9717 21 15.7296 20.9471 15.5042C20.8805 15.2208 20.753 14.9554 20.5733 14.7264C20.4303 14.5442 20.2412 14.3929 19.8631 14.0905L17.0658 11.8527C16.6874 11.5499 16.4982 11.3985 16.2898 11.3451C16.1061 11.298 15.9129 11.3041 15.7325 11.3627C15.5279 11.4291 15.3486 11.5921 14.99 11.9181Z"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Images
                    multiples</label>
                <x-text-input id="images" name="images[]" type="file" class="text-xs shadow-none" multiple="multiple"
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
            <input type="hidden" name="is_online" value="0">
            <input id="is_online" type="checkbox" value="1" name="is_online"
                   class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600">
            <label for="is_online" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">À la une</label>
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
