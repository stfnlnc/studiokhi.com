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
                <a class="text-xs underline text-sk-grey hover:text-sk-dark"
                   target="_blank"
                   href="{{ route('app.show', $work->slug) }}">{{ route('app.show', $work->slug) }}</a>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-16">
                    @include('admin.work.partials.form', ['method' => 'patch', 'route' => 'admin.works.update', 'work' => $work])
                    <div class="flex flex-col space-y-6 w-full">
                        <div class="relative w-fit">
                            @if($work->image_path)
                                @if($work->image_format === 'webp')
                                    <img class="rounded-lg aspect-video object-cover object-center w-full"
                                         src="{{ asset('storage/' . $work->slug . '/640/' . $work->image_path) }}"
                                         alt="">
                                @endif
                                @if($work->image_format === 'mp4')
                                    <video class="rounded-lg" controls loop
                                           src="{{ asset('storage/' . $work->slug . '/mp4/' . $work->image_path) }}"></video>
                                @endif
                                <form class="absolute top-1 right-1" method="post" action="{{ route('admin.works.destroyImage', $work) }}">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button>X</x-danger-button>
                                </form>
                            @endif
                        </div>
                        <div class="grid grid-cols-2 w-full gap-4">
                            @foreach($work->images as $image)
                                <div class="relative w-full">
                                    @if($image->image_format === 'webp')
                                        <img class="rounded-lg aspect-video object-cover object-center w-full"
                                             src="{{ asset('storage/' . $work->slug . '/640/' . $image->image_path) }}"
                                             alt="">
                                    @endif
                                    @if($image->image_format === 'mp4')
                                        <video class="rounded-lg aspect-video object-cover object-center w-full"
                                               src="{{ asset('storage/' . $work->slug . '/mp4/' . $image->image_path) }}" controls loop></video>
                                        <span class="absolute top-1 left-1 px-1 py-px bg-zinc-50 rounded-lg text-zinc-900 text-xs">video</span>
                                    @endif
                                    <form class="absolute top-1 right-1" method="post"
                                          action="{{ route('admin.works.destroyImages', $image) }}">
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
        </div>
    </div>
</x-app-layout>
