<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Accueil') }}
        </h2>
    </x-slot>

    <div class="py-12 flex justify-center">
        @include('components.search-bar')
    </div>

    <div id="hello-react" class="text-gray-800 dark:text-gray-200">
 
</div>

    <script src="{{ mix('build/js/app.js') }}"></script>
    
</x-app-layout>
