<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200 leading-tight">
            {{ __('Edit') }} "{{ $post->title }}"
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
                   href="{{ route('app.post.show', $post->slug) }}">{{ route('app.post.show', $post->slug) }}</a>
                <div class="w-full grid grid-cols-1 lg:grid-cols-2 gap-16">
                    @include('admin.post.partials.form', ['method' => 'patch', 'route' => 'admin.posts.update', 'post' => $post])
                    <div class="flex flex-col space-y-6 w-full">
                        <div class="relative w-fit">
                            @if($post->image_path)
                                @if($post->image_format === 'webp')
                                    <img class="rounded-lg aspect-video object-cover object-center w-full"
                                         src="{{ asset('uploads/posts/' . $post->slug . '/640/' . $post->image_path) }}"
                                         alt="">
                                @endif
                                <form class="absolute top-1 right-1" method="post" action="{{ route('admin.posts.destroyImage', $post) }}">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
