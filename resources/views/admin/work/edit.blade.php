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
                   href="{{ route('app.work.show', $work->slug) }}">{{ route('app.work.show', $work->slug) }}</a>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-16">
                    @include('admin.work.partials.form', ['method' => 'patch', 'route' => 'admin.works.update', 'work' => $work])
                    <div class="flex flex-col space-y-6 w-full">
                        <div class="relative w-fit">
                            @if($work->image_path)
                                @if($work->image_format === 'webp')
                                    <img class="rounded-lg aspect-video object-cover object-center w-full"
                                         src="{{ asset('uploads/works/' . $work->slug . '/640/' . $work->image_path) }}"
                                         alt="">
                                @endif
                                @if($work->image_format === 'mp4')
                                    <video class="rounded-lg" controls loop
                                           src="{{ asset('uploads/works/' . $work->slug . '/mp4/' . $work->image_path) }}"></video>
                                @endif
                                <form class="absolute top-1 right-1" method="post" action="{{ route('admin.works.destroyImage', $work) }}">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17 7L7 17M7 7L17 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </svg>
                                    </x-danger-button>
                                </form>
                            @endif
                        </div>
                        <div class="grid grid-cols-1 w-full gap-4">
                            @foreach($work->images->sortBy('order') as $key => $image)
                                <div id="{{ $key }}" class="relative w-full">
                                    @if($image->image_format === 'webp')
                                        <img class="rounded-lg aspect-video object-cover object-center w-full"
                                             src="{{ asset('uploads/works/' . $work->slug . '/640/' . $image->image_path) }}"
                                             alt="">
                                    @endif
                                    @if($image->image_format === 'mp4')
                                        <video class="rounded-lg aspect-video object-cover object-center w-full"
                                               src="{{ asset('uploads/works/' . $work->slug . '/mp4/' . $image->image_path) }}" controls loop></video>
                                        <span class="absolute top-1 left-1 px-1 py-px bg-zinc-50 rounded-lg text-zinc-900 text-xs">video</span>
                                    @endif
                                    <form class="absolute top-1 right-1" method="post"
                                          action="{{ route('admin.works.destroyImages', $image) }}">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button>
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M17 7L7 17M7 7L17 17" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                      stroke-linejoin="round"/>
                                            </svg>
                                        </x-danger-button>
                                    </form>
                                    <div class="absolute top-2 left-2 flex flex-row gap-2">
                                        @if($image->order !== count($work->images) - 1)
                                            <form action="{{ route('admin.images.up', $image) }}#{{ $key }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <x-primary-button type="submit">
                                                    <svg class="cursor-pointer" width="20" height="20" viewBox="0 0 24 24"
                                                         fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                        />
                                                    </svg>
                                                </x-primary-button>
                                            </form>
                                        @endif
                                        @if($image->order !== 0)
                                            <form action="{{ route('admin.images.down', $image) }}#{{ $key }}" method="post">
                                                @csrf
                                                @method('PATCH')
                                                <x-primary-button type="submit">
                                                    <svg class="cursor-pointer" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M18 15L12 9L6 15" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                              stroke-linejoin="round"
                                                        />
                                                    </svg>
                                                </x-primary-button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
