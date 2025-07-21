<x-layout.app-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Dettaglio Movie</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border border-blue-500 p-6 rounded-lg">
        <div class="flex justify-center">
            <img src="{{ $movie->cover }}" alt="{{ $movie->title }}" class="w-50 max-w-md rounded-lg shadow-lg">
        </div>

        <div class="space-y-4">
            <h2 class="text-3xl font-bold text-gray-900">{{ $movie->title }}</h2>

            <div class="text-lg text-gray-600">
                <span class="font-semibold">Anno:</span> {{ $movie->year }}
            </div>
            <div class="text-lg text-gray-600">
                <span class="font-semibold">Regista:</span>
                @foreach ($movie->directors as $director)
                    <span class="text-gray-500">{{ $director->name }}</span>,
                @endforeach
            </div>

            <div class="prose max-w-none">
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Descrizione</h3>
                <p class="text-gray-700 leading-relaxed">{{ $movie->description }}</p>
            </div>

            <div class="text-lg text-gray-600">
                <span class="font-semibold">Categorie:</span>
                <ul class="list-disc pl-5">
                    @foreach ($movie->categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-layout.app-layout>
