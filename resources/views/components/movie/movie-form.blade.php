<div>
    {{-- @if ($errors->any())
        <div class="text-red-500 bg-red-100 p-4 rounded-md mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="/movies" method="post" class="space-y-4">
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" id="title"
            value="{{ old('title') }}"
                class="mt-1 block w-full border-gray-500 rounded-md border focus:border-blue-500 focus:ring-blue-500">
            @error('title')
                <p class="text-red-500 font-light italic text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="director" class="block text-sm font-medium text-gray-700">Director</label>
            <input type="text" name="director" id="director"
            value="{{ old('director') }}"
                class="mt-1 block w-full border-gray-500 rounded-md border focus:border-blue-500 focus:ring-blue-500">
            @error('director')
                <p class="text-red-500 font-light italic text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="cover" class="block text-sm font-medium text-gray-700">Cover</label>
            <input type="text" name="cover" id="cover"
            value="{{ old('cover') }}"
                class="mt-1 block w-full border-gray-500 rounded-md border focus:border-blue-500 focus:ring-blue-500">
            @error('cover')
                <p class="text-red-500 font-light italic text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
            <textarea name="description" id="description" rows="3"
                class="mt-1 block w-full border-gray-500 rounded-md border focus:border-blue-500 focus:ring-blue-500">
                {{ old('description') }}
            </textarea>
            @error('description')
                <p class="text-red-500 font-light italic text-sm">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="year" class="block text-sm font-medium text-gray-700">Year</label>
            <input type="number" name="year" id="year"
            value="{{ old('year') }}"
                class="mt-1 block w-full border-gray-500 rounded-md border focus:border-blue-500 focus:ring-blue-500">
            @error('year')
                <p class="text-red-500 font-light italic text-sm">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                Create Movie
            </button>
        </div>
    </form>
</div>
