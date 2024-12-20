@props([
    'method' => 'put',
    'route' => '',
])

<section>
    <form method="post" action="{{ route($route, $work) }}" class="space-y-6" enctype="multipart/form-data">
        @csrf
        @method($method)
        <div>
            <x-input-label for="image" :value="__('File')"/>
            <x-text-input id="image" name="image" type="file" class="mt-1 block w-full"
                          autofocus/>
            <x-input-error class="mt-2" :messages="$errors->get('image')"/>
        </div>

        <div>
            <x-input-label for="images" :value="__('Images')"/>
            <x-text-input id="images" name="images[]" type="file" class="mt-1 block w-full" multiple="multiple"
                          autofocus/>
            <x-input-error class="mt-2" :messages="$errors->get('images')"/>
        </div>

        <div>
            <x-input-label for="title" :value="__('Title')"/>
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('name', $work->title)"
                          autofocus autocomplete="title"/>
            <x-input-error class="mt-2" :messages="$errors->get('title')"/>
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
                   class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="online" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mettre en ligne</label>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-zinc-600 dark:text-zinc-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
