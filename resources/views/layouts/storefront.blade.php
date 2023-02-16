<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >
    <title>Couture Impériale</title>
    <meta
        name="WIP"
        content="//TODO"
    >
    @vite(['resources/sass/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
    
    <link
        href="{{ asset('css/app.css') }}"
        rel="stylesheet"
    >
    <script
        defer
        src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    {{-- <link
        rel="icon"
        href="{{ asset('favicon.svg') }}"
    > --}}
    @livewireStyles
</head>

<body class="storefront-layout">
    @livewire('components.navigation')

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>

</html>