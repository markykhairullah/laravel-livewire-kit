@php
    $title = 'Beranda';
    $description = null;
@endphp

<x-layouts::page :title="$title" :description="$description">
    {{-- Page: Contents --}}
    <h1>Selamat datang di EduPlanner!</h1>
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
            console.log('Page scripts: Home')
        </script>

        {{-- Page: Additional Scripts --}}
        @stack('pageScripts')
    @endpush
</x-layouts::page>
