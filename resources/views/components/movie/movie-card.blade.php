<div class="mt-8 bg-white border border-green-600 rounded-lg p-4">
    <h2 class="text-2xl font-bold mb-4">{{ $movie['title'] }}</h2>

    <div class="flex flex-col md:flex-row space-x-4">
        <img src="{{ $movie['cover'] }}" alt="COVER" class="w-50 h-auto object-cover rounded-lg mb-4" />
        <div class="flex-1">
            <p class="text-lg font-semibold mb-2">
                Anno: <span class="font-normal">{{ $movie['year'] }}</span>
            </p>
            <p class="text-lg font-semibold mb-2">
                Regista: <span class="font-normal">{{ $movie['director'] }}</span>
            </p>
        </div>
    </div>
</div>
