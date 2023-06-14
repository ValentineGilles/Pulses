<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Résultats') }}
        </h2>
    </x-slot>

    <main>
        @foreach ($artists as $artist)
            <div class="py-1">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="max-w-xl">
                            <a href="{{ route('artist.show', $artist->id) }}" class="text-gray-800 dark:text-gray-200 hover:underline">
                                {{ $artist->artist_name }}
                            </a>
                            <x-primary-button>{{ __('S\'abonner') }}</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </main>
</x-app-layout>
