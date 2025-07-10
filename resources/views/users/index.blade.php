<x-layout.app-layout>

    <h1 class="text-2xl font-bold pb-6">Users</h1>


    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 px-4">
        @foreach ($users as $user)
            <x-user.user-card :utente="$user" />
        @endforeach
    </ul>

</x-layout.app-layout>
