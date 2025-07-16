<div class="mt-8 bg-white border border-green-600 rounded-lg p-4">
    <h2 class="text-2xl font-bold mb-4">{{ $movie->title }}</h2>

    <div class="flex flex-col md:flex-row space-x-4">
        <img src="{{ $movie->cover }}" alt="{{ $movie->title }}" class="w-50 h-auto object-cover rounded-lg mb-4" />
        <div class="flex-1">
            <p class="text-lg font-semibold mb-2">
                Anno: <span class="font-normal">{{ $movie->year }}</span>
            </p>
            <p class="text-lg font-semibold mb-2">
                Regista: <span class="font-normal">{{ $movie->director->name }}</span>
            </p>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('movies.show', $movie->id) }}" class="text-white bg-blue-500 hover:bg-blue-600 rounded-lg px-4 py-2">
            Visualizza
        </a>
        <a href="{{ route('movies.edit', $movie->id) }}" class="text-white bg-yellow-500 hover:bg-yellow-600 rounded-lg px-4 py-2 ml-2">
            Modifica
        </a>
        <form action="{{ route('movies.destroy', $movie->id) }}" method="post" class="inline-block ml-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-white bg-red-500 hover:bg-red-600 rounded-lg px-4 py-2 cursor-pointer">
                Elimina
            </button>
        </form>
    </div>
</div>
