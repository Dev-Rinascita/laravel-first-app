<x-layout.app-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Dettaglio regista</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border border-blue-500 p-6 rounded-lg">
        <div class="flex justify-center">
            <img src="{{ $director->img ?? 'https://i.pravatar.cc/300' }}" alt="{{ $director->name }}"
                class="w-50 max-w-md rounded-lg shadow-lg">
        </div>
        <div class="space-y-4">
            <h2 class="text-3xl font-bold text-gray-900">{{ $director->name }}</h2>

            <div class="text-lg text-gray-600">
                <span class="font-semibold">Età:</span> {{ $director->age }}
            </div>

            <div class="text-lg text-gray-600">
                <span class="font-semibold">Film diretti:</span>
                <ul class="list-disc pl-5">
                    @foreach ($director->movies as $movie)
                        <li>
                            <h2>{{ $movie->id }} - {{ $movie->title }} ({{ $movie->year }})</h2>
                            <ul>
                                <li class="text-gray-600">
                                    <span class="font-semibold">Categorie:</span>
                                    <table class="list-disc pl-5 border border-gray-300">
                                        @foreach ($movie->categories as $category)
                                            <tr class="border-b border-gray-200">
                                                <td class="border border-gray-200">{{ $category->name }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </li>
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>

</x-layout.app-layout>
