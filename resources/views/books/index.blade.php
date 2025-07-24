<x-layout.app-layout>
    <h1 class="text-2xl font-bold">Books</h1>
    <ul>
        @foreach($books as $book)
        <li>
            <strong>{{ $book->title }}</strong> by {{ $book->author }} (ISBN: {{ $book->isbn }})
        </li>
        @endforeach
    </ul>
</x-layout.app-layout>
