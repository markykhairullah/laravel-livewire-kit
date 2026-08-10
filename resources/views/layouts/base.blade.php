@php
    $defaultDescription = 'Laravel Livewire Kit with Flux UI Components, TailwindCSS, AlpineJS, Vite, and more.';
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>{{ $title ?? config('app.name') }}</title>

        {{-- Base: Meta Tags --}}
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{{ $description ?? $defaultDescription }}">

        {{-- Base: Favicon --}}
        <link href="/favicon.ico" rel="icon" sizes="any">
        <link type="image/svg+xml" href="/favicon.svg" rel="icon">
        <link href="/apple-touch-icon.png" rel="apple-touch-icon">

        {{-- Base: Fonts --}}
        @fonts

        {{-- Base: Vite --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Base: Package Styles --}}
        @livewireStyles
    </head>

    <body>
        {{-- Base: Contents --}}
        {{ $slot }}

        {{-- Base: Package Scripts --}}
        @livewireScripts

        {{-- Base: Scripts --}}
        <script>
            console.log('Base scripts')
        </script>

        {{-- Base: Additional Scripts --}}
        @stack('baseScripts')
    </body>

</html>
