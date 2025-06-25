<x-layout.app-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Movies</h1>
        <a href="/movies/create" class="text-white rounded-xl p-4 hover:underline bg-blue-500 ">Add New Movie</a>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 px-4">
        @if (session('success'))
            <div class="col-span-full">
                <p class="text-green-800 bg-green-300 p-4 rounded-lg">{{ session('success') }}</p>
            </div>
        @endif
        @if($movies->isEmpty())
            <div class="col-span-full text-center">
                <p class="text-blue-800 bg-blue-300 p-4 rounded-2xl">No movies found.</p>
            </div>
        @else
            @foreach ($movies as $movie)
                <x-movie.movie-card :movie="$movie" />
            @endforeach
        @endif
    </div>

</x-layout.app-layout>
