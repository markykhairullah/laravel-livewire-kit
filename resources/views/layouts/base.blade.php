@php
    $defaultDescription = 'Laravel Livewire Kit with Flux UI Components, TailwindCSS, AlpineJS, Vite, and more.';
@endphp

<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
              rel="stylesheet">

        {{-- Base: Vite --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- Base: Package Styles --}}
        @livewireStyles
        @fluxAppearance
    </head>

    <body class="min-h-screen bg-white dark:bg-neutral-900 antialiased">
        {{-- Base: Contents --}}
        {{ $slot }}

        {{-- Base: Package Scripts --}}
        @livewireScripts
        @fluxScripts

        {{-- Base: Scripts --}}
        <script>
            console.log('Base scripts')
        </script>

        {{-- Base: Additional Scripts --}}
        @stack('baseScripts')
    </body>

</html>
