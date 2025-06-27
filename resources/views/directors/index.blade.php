<x-layout.app-layout>

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Registi</h1>
        <form action="{{ route('directors.index') }}" method="get" class="flex items-center space-x-2">
            <input type="text" name="search" placeholder="Cerca regista..." class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="text" name="age" placeholder="Età" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="bg-blue-500 text-white rounded-lg px-4 py-2 hover:bg-blue-600">Cerca</button>
        </form>
        <a href="{{ route('directors.create') }}" class="text-white rounded-xl p-4 hover:underline bg-blue-500 ">Aggiungi Nuovo Regista</a>
    </div>
    @if (session('success'))
        <div class="col-span-full">
            <p class="text-green-800 bg-green-300 p-4 rounded-lg">{{ session('success') }}</p>
        </div>
    @endif
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 px-4">
        @if ($directors->isEmpty())
            <li class="col-span-full text-center text-gray-500">Nessun regista trovato.</li>
        @else
            {{-- Loop through the directors and display each one using the director-card component --}}
            @foreach ($directors as $director)
                <x-director.director-card :regista="$director" />
            @endforeach
        @endif

    </ul>

</x-layout.app-layout>
