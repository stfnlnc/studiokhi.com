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
                            @foreach($works as $work)
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
                                            <div class="text-base font-semibold">{{ $work->title }}</div>
                                            <div class="font-normal text-zinc-500">{{ $work->subtitle }}</div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            <div class="h-2.5 w-2.5 rounded-full {{ $work->online ? 'bg-green-500' : 'bg-red-500' }} me-2"></div>
                                            {{ $work->online ? 'En ligne' : 'Hors ligne' }}
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
</x-app-layout>
