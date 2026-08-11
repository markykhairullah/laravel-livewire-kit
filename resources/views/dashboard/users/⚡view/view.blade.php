{{-- Page: Variables --}}
@php
    $page = 'Daftar';
    $data = 'Akun Pengguna';
    $title = $page . ' ' . $data;
    $description = $page . ' ' . Str::lower($data) . ' yang terdaftar di sistem.';
@endphp

{{-- Page: Head --}}
<x-slot:title>{{ $title }}</x-slot:title>
<x-slot:description>{{ $description }}</x-slot:description>

{{-- Page: Contents --}}
<div>
    <div class="flex gap-6 flex-col sm:flex-row items-center">
        <div class="w-full">
            <flux:breadcrumbs class="mb-6">
                <flux:breadcrumbs.item href="{{ route('dashboard.overview') }}">Dasbor</flux:breadcrumbs.item>
                <flux:breadcrumbs.item href="{{ route('dashboard.users.view') }}">
                    {{ $data }}
                </flux:breadcrumbs.item>
                <flux:breadcrumbs.item>{{ $page }}</flux:breadcrumbs.item>
            </flux:breadcrumbs>
            <flux:heading size="xl" level="1">{{ $title }}</flux:heading>
            <flux:text class="mt-2 mb-6 text-base">{{ $description }}</flux:text>
        </div>
        <div class="w-full sm:w-fit flex gap-2 mb-6 sm:mb-0 items-center">
            <flux:button class="w-full" variant="primary">Tambah</flux:button>

            <flux:dropdown>
                <flux:button icon:trailing="chevron-down">Data</flux:button>

                <flux:menu>
                    <flux:menu.item>Impor</flux:menu.item>
                    <flux:menu.item>Ekspor</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </div>
    </div>

    <flux:separator variant="subtle" />
</div>

{{-- Page: Script Parent --}}
@push('structureScripts')
    {{-- Page: Scripts --}}
    <script>
        console.log('Page scripts: View Users')
    </script>

    {{-- Page: Additional Scripts --}}
    @stack('pageScripts')
@endpush
