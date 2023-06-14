<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails de l\'artiste') }}
        </h2>
    </x-slot>

    <main>
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        <h1>{{ $artist->artist_name }}</h1>
                        <br>
                        <x-primary-button type="submit" class="text-sm text-gray-700 dark:text-gray-500" name="subscribe" value="{{$artist->id}}">
                            {{ __("S'abonner") }}
                        </x-primary-button>
                        <!-- Affichez les autres informations de l'artiste ici -->
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
