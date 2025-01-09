<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-zinc-800 dark:text-zinc-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-zinc-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-zinc-900 dark:text-zinc-100">
                    @if (session('status'))
                        <x-alert status="{{ session('status') }}"
                        >{{ session('message') }}
                        </x-alert>
                    @endif
                    <section>
                        <form method="post" action="{{ route('admin.images.updateorcreate') }}" class="space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="flex flex-col gap-8">
                                <div class="flex flex-col gap-1">
                                    @if(isset($images['image-index-left']))
                                        <img class="rounded-lg aspect-video object-cover object-center w-48"
                                             src="{{ asset('uploads/images/' . 'image-index-left' . '/640/' . $images['image-index-left']) }}"
                                             alt="">
                                    @endif
                                    <label for="image-index-left"
                                           class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                                           autofocus>Image - Page d'accueil - Index 1</label>
                                    <x-text-input id="image-index-left" name="image-index-left" type="file" class="text-xs"
                                                  autofocus/>
                                    <x-input-error class="mt-2" :messages="$errors->get('image-index-left')"/>
                                </div>
                                <div class="flex flex-col gap-1">
                                    @if(isset($images['image-index-right']))
                                        <img class="rounded-lg aspect-video object-cover object-center w-48"
                                             src="{{ asset('uploads/images/' . 'image-index-right' . '/640/' . $images['image-index-right']) }}"
                                             alt="">
                                    @endif
                                    <label for="image-index-right"
                                           class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                                           autofocus>Image - Page d'accueil - Index 2</label>
                                    <x-text-input id="image-index-right" name="image-index-right" type="file" class="text-xs"
                                                  autofocus/>
                                    <x-input-error class="mt-2" :messages="$errors->get('image-index-right')"/>
                                </div>
                                <div class="flex flex-col gap-1">
                                    @if(isset($images['image-studio-top']))
                                        <img class="rounded-lg aspect-video object-cover object-center w-48"
                                             src="{{ asset('uploads/images/' . 'image-studio-top' . '/640/' . $images['image-studio-top']) }}"
                                             alt="">
                                    @endif
                                    <label for="image-studio-top"
                                           class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                                           autofocus>Image - Studio - 1</label>
                                    <x-text-input id="image-studio-top" name="image-studio-top" type="file" class="text-xs"
                                                  autofocus/>
                                    <x-input-error class="mt-2" :messages="$errors->get('image-studio-top')"/>
                                </div>
                                <div class="flex flex-col gap-1">
                                    @if(isset($images['image-studio-bottom']))
                                        <img class="rounded-lg aspect-video object-cover object-center w-48"
                                             src="{{ asset('uploads/images/' . 'image-studio-bottom' . '/640/' . $images['image-studio-bottom']) }}"
                                             alt="">
                                    @endif
                                    <label for="image-studio-bottom"
                                           class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                                           autofocus>Image - Studio - 2</label>
                                    <x-text-input id="image-studio-bottom" name="image-studio-bottom" type="file" class="text-xs"
                                                  autofocus/>
                                    <x-input-error class="mt-2" :messages="$errors->get('image-studio-bottom')"/>
                                </div>
                                <div class="flex flex-col gap-1">
                                    @if(isset($images['image-studio-stefan']))
                                        <img class="rounded-lg aspect-video object-cover object-center w-48"
                                             src="{{ asset('uploads/images/' . 'image-studio-stefan' . '/640/' . $images['image-studio-stefan']) }}"
                                             alt="">
                                    @endif
                                    <label for="image-studio-stefan"
                                           class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                                           autofocus>Image - Studio - Stefan</label>
                                    <x-text-input id="image-studio-stefan" name="image-studio-stefan" type="file" class="text-xs"
                                                  autofocus/>
                                    <x-input-error class="mt-2" :messages="$errors->get('image-studio-stefan')"/>
                                </div>
                                <div class="flex flex-col gap-1">
                                    @if(isset($images['image-studio-cynthia']))
                                        <img class="rounded-lg aspect-video object-cover object-center w-48"
                                             src="{{ asset('uploads/images/' . 'image-studio-cynthia' . '/640/' . $images['image-studio-cynthia']) }}"
                                             alt="">
                                    @endif
                                    <label for="image-studio-cynthia"
                                           class="cursor-pointer rounded-md border-zinc-300 p-2 shadow-sm border dark:border-zinc-700 dark:bg-zinc-900 dark:text-zinc-300"
                                           autofocus>Image - Studio - Cynthia</label>
                                    <x-text-input id="image-studio-cynthia" name="image-studio-cynthia" type="file" class="text-xs"
                                                  autofocus/>
                                    <x-input-error class="mt-2" :messages="$errors->get('image-studio-cynthia')"/>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
