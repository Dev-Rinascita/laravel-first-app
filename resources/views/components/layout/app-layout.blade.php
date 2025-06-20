<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4" defer></script>

    {{-- andiamo a compilare con vite i nostri asset ovvero i file css e i file js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    <div class="p-4">
        <x-layout.navbar />
    </div>

    <div class="px-6 py-6">
        {{ $slot }}
    </div>
    <div class="p-4">
        <x-layout.footer />
    </div>
</body>

</html>
