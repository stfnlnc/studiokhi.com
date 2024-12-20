<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200 leading-tight">
            {{ __('Edit') }} "{{ $work->title }}"
        </h2>
        @if (session('status'))
            <x-alert status="{{ session('status') }}"
            >{{ session('message') }}
            </x-alert>
        @endif
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-zinc-800 shadow sm:rounded-lg">
                <div class="w-full grid grid-cols-2 gap-16">
                    @include('admin.work.partials.form', ['method' => 'patch', 'route' => 'admin.works.update', 'work' => $work])
                    <div class="flex flex-col space-y-6">
                        <div class="relative w-fit">
                            @if($work->image_path)
                                <img class="rounded-lg" width="360" src="{{ asset('storage/' . $work->slug . '/640/' . $work->image_path) }}" alt="">
                                <form class="absolute top-2 right-2" method="post" action="{{ route('admin.works.destroyImage', $work) }}">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button>X</x-danger-button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
