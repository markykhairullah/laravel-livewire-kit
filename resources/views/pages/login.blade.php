@php
    $title = 'Masuk';
    $description = null;
@endphp

<x-layouts::auth :title="$title" :description="$description">
    {{-- Page: Contents --}}
    <h1>Silakan masuk terlebih dahulu!</h1>
    <nav>
        <ul>
            <li>
                <item>
                    <a href="/" wire:navigate>Beranda</a>
                </item>
            </li>
            <li>
                <item>
                    <a href="/dashboard" wire:navigate>Dasbor</a>
                </item>
            </li>
            <li>
                <item>
                    <a href="/login" wire:navigate>Login</a>
                </item>
            </li>
        </ul>
    </nav>

    {{-- Page: Script Parent --}}
    @push('structureScripts')
        {{-- Page: Scripts --}}
        <script>
            console.log('Page scripts: Login')
        </script>

        {{-- Page: Additional Scripts --}}
        @stack('pageScripts')
    @endpush
</x-layouts::auth>
