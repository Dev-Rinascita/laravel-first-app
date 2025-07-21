<x-layout.app-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold ">Create Movies</h1>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 px-4">
        <x-movie.movie-form :film=null :categorie="$categories" :registi="$directors" />
    </div>

</x-layout.app-layout>
