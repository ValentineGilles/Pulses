<form action="{{ route('search') }}" method="GET">
        <div class="flex items-center">
            <input type="text" name="query" placeholder="Rechercher un artiste" class="rounded-l-md py-2 px-4 border-t mr-0 border-b border-l text-gray-800 border-gray-200 bg-white focus:outline-none" />
            <button type="submit" class="px-4 py-2 bg-gray-800 dark:bg-gray-200 text-white dark:text-gray-800 font-semibold rounded-r-md border border-blue-500 hover:bg-blue-600 focus:outline-none">Rechercher</button>
        </div>
</form>
