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
                            <a href="{{ route('admin.works.create') }}">
                                <x-primary-button>Ajouter un projet</x-primary-button>
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
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nom
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    À la une
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Statut
                                </th>
                                <th scope="col" class="px-6 py-3 rounded-tr-lg w-0">
                                    Action
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($works as $work)
                                <tr class="bg-white border-b dark:bg-zinc-800 dark:border-zinc-700 hover:bg-zinc-50 dark:hover:bg-zinc-600">
                                    <td class="w-4 p-4">
                                        <div class="bg-zinc-200 rounded-full w-6 h-6 inline-flex items-center justify-center text-xs">
                                            {{ $work->order }}
                                        </div>
                                    </td>
                                    <td class="w-4 p-4">
                                        @if($work->order !== 0)
                                            <form action="{{ route('admin.works.up', $work) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit">
                                                    <svg class="cursor-pointer" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                        />
                                                    </svg>
                                                </button>
                                            </form>
                                        @endif
                                        @if($work->order !== count($works) - 1)
                                            <form action="{{ route('admin.works.down', $work) }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit">
                                                    <svg class="cursor-pointer" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                        />
                                                    </svg>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                    <td class="flex items-center px-6 py-4 min-h-full text-zinc-900 whitespace-nowrap dark:text-white">
                                        <div class="ps-3">
                                            <div class="text-base font-semibold">{{ $work->title }}</div>
                                            <div class="font-normal text-zinc-500">{{ $work->subtitle }}</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <svg class="fill-white {{ $work->is_online ? 'stroke-green-500' : 'stroke-red-500' }}" width="20"
                                                 height="20"
                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 7V12M8 8.99951C7.37209 9.83526 7 10.8742 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 10.8742 16.6279 9.83526 16 8.99951M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <svg class="fill-white {{ $work->is_published ? 'stroke-green-500' : 'stroke-red-500' }}" width="20"
                                                 height="20"
                                                 viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12 7V12M8 8.99951C7.37209 9.83526 7 10.8742 7 12C7 14.7614 9.23858 17 12 17C14.7614 17 17 14.7614 17 12C17 10.8742 16.6279 9.83526 16 8.99951M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            {{ $work->is_published ? 'En ligne' : 'Hors ligne' }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 gap-2 flex flex-row items-start">
                                        <a href="{{ route('admin.works.edit', $work) }}">
                                            <x-primary-button>Éditer</x-primary-button>
                                        </a>
                                        <form method="post" action="{{ route('admin.works.destroy', $work) }}">
                                            @csrf
                                            @method('DELETE')
                                            <x-danger-button>Supprimer</x-danger-button>
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
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900 dark:text-zinc-100 grid grid-cols-1 md:grid-cols-2 gap-16">
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
                    <div class="flex flex-col gap-4">
                        @foreach($tags as $tag)
                            <div class="relative w-fit">
                                <x-tag.primary color="{{ $tag->color }}">{{ $tag->name }}</x-tag.primary>
                                <form class="absolute -top-4 -right-4" method="post" action="{{ route('admin.tags.destroy', $tag) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">
                                        <svg class="fill-red-500 stroke-white" width="30" height="30" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15 9L9 15M9 9L15 15M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
