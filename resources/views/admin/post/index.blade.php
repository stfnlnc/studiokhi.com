<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900 dark:text-zinc-100">
                    @if (session('status'))
                        <x-alert status="{{ session('status') }}"
                        >{{ session('message') }}
                        </x-alert>
                    @endif
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div
                            class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-zinc-800">
                            <a href="{{ route('admin.posts.create') }}">
                                <x-primary-button>Ajouter un article</x-primary-button>
                            </a>
                            <label for="table-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-zinc-500 dark:text-zinc-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                         fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="text" id="table-search-users"
                                       class="block p-2 ps-10 text-sm text-zinc-900 border border-zinc-300 rounded-lg w-80 bg-zinc-50 focus:ring-indigo-500 focus:border-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-indigo-500 dark:focus:border-indigo-500"
                                       placeholder="Rechercher">
                            </div>
                        </div>
                        <table class="w-full text-sm text-left rtl:text-right text-zinc-500 dark:text-zinc-400">
                            <thead class="text-xs text-zinc-700 uppercase bg-zinc-50 dark:bg-zinc-700 dark:text-zinc-400">
                            <tr>
                                <th scope="col" class="p-4 rounded-tl-lg">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox"
                                               class="w-4 h-4 text-indigo-600 bg-zinc-100 border-zinc-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-zinc-800 dark:focus:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                    </div>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Statut
                                </th>
                                <th scope="col" class="px-6 py-3 rounded-tr-lg">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr class="bg-white border-b dark:bg-zinc-800 dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-600">
                                    <td class="w-4 p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-1" type="checkbox"
                                                   class="w-4 h-4 text-indigo-600 bg-zinc-100 border-zinc-300 rounded focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:ring-offset-zinc-800 dark:focus:ring-offset-zinc-800 focus:ring-2 dark:bg-zinc-700 dark:border-zinc-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row" class="flex items-center px-6 py-4 min-h-full text-zinc-900 whitespace-nowrap dark:text-white">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ $post->title }}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div
                                                class="h-2.5 w-2.5 rounded-full {{ $post->is_published ? 'bg-green-500' : 'bg-red-500' }} me-2"></div>
                                            {{ $post->is_published ? 'En ligne' : 'Hors ligne' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 gap-2 flex flex-row items-start">
                                        <a href="{{ route('admin.posts.edit', $post) }}">
                                            <x-primary-button>
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11 3.99998H6.8C5.11984 3.99998 4.27976 3.99998 3.63803 4.32696C3.07354 4.61458 2.6146 5.07353 2.32698 5.63801C2 6.27975 2 7.11983 2 8.79998V17.2C2 18.8801 2 19.7202 2.32698 20.362C2.6146 20.9264 3.07354 21.3854 3.63803 21.673C4.27976 22 5.11984 22 6.8 22H15.2C16.8802 22 17.7202 22 18.362 21.673C18.9265 21.3854 19.3854 20.9264 19.673 20.362C20 19.7202 20 18.8801 20 17.2V13M7.99997 16H9.67452C10.1637 16 10.4083 16 10.6385 15.9447C10.8425 15.8957 11.0376 15.8149 11.2166 15.7053C11.4184 15.5816 11.5914 15.4086 11.9373 15.0627L21.5 5.49998C22.3284 4.67156 22.3284 3.32841 21.5 2.49998C20.6716 1.67156 19.3284 1.67155 18.5 2.49998L8.93723 12.0627C8.59133 12.4086 8.41838 12.5816 8.29469 12.7834C8.18504 12.9624 8.10423 13.1574 8.05523 13.3615C7.99997 13.5917 7.99997 13.8363 7.99997 14.3255V16Z"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </x-primary-button>
                                        </a>
                                        <form method="post" action="{{ route('admin.posts.destroy', $post) }}">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>
                                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M17 7L7 17M7 7L17 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                </svg>
                                            </x-danger-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-zinc-900 dark:text-zinc-100 grid grid-cols-2">
                        <form action="{{ route('admin.tags.store') }}" method="post" class="flex flex-col gap-4">
                            @csrf
                            <div>
                                <x-input-label for="name" :value="__('Name')"/>
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-fit"
                                              :value="old('name')" autocomplete="name"/>
                                <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                            </div>
                            <div>
                                <x-input-label for="name" :value="__('Name')"/>
                                <select id="color" name="color"
                                        class="border-zinc-300 dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="blue">Bleu</option>
                                    <option value="green">Vert</option>
                                    <option value="purple">Violet</option>
                                    <option value="beige">Beige</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('name')"/>
                            </div>
                            <x-primary-button class="w-fit">Enregistrer</x-primary-button>
                        </form>
                        <div class="flex flex-col gap-2">
                            @foreach($tags as $tag)
                                <div class="flex flex-row gap-1">
                                    <x-tag.primary color="{{ $tag->color }}">{{ $tag->name }}</x-tag.primary>
                                    <form class="" method="post" action="{{ route('admin.tags.destroy', $tag) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button>X</x-danger-button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
</x-app-layout>
