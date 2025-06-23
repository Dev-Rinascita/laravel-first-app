<x-layout.app-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Movies</h1>
        <a href="/movies/create" class="text-white rounded-xl p-4 hover:underline bg-blue-500 ">Add New Movie</a>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 px-4">
        @foreach ($movies as $movie)
            <x-movie.movie-card :movie="$movie" />
        @endforeach
    </div>

</x-layout.app-layout>
