<div>

    <form action="{{ isset($regista) ? route('directors.update', $regista) : route('directors.store') }}" method="post" class="space-y-4">
        @csrf
        @if (isset($regista))
            @method('PUT')
        @endif
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name"
            value="{{ old('name') ?? $regista->name ?? '' }}"
                class="mt-1 block w-full border-gray-500 rounded-md border focus:border-blue-500 focus:ring-blue-500">
            @error('name')
                <p class="text-red-500 font-light italic text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="age" class="block text-sm font-medium text-gray-700">Age</label>
            <input type="number" name="age" id="age"
            value="{{ old('age') ?? $regista->age ?? '' }}"
                class="mt-1 block w-full border-gray-500 rounded-md border focus:border-blue-500 focus:ring-blue-500">
            @error('age')
                <p class="text-red-500 font-light italic text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                {{ isset($regista) ? 'Modfica' : 'Crea' }}
            </button>
        </div>
    </form>
</div>
