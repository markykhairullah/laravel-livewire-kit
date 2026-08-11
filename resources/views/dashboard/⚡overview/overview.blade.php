{{-- Page: Variables --}}
@php
    $title = 'Dasbor';
    $description = 'Ringkasan informasi dan statistik sistem.';
@endphp

{{-- Page: Head --}}
<x-slot:title>{{ $title }}</x-slot:title>
<x-slot:description>{{ $description }}</x-slot:description>

{{-- Page: Contents --}}
<div>
    <div class="flex gap-6 flex-col sm:flex-row items-center">
        <div class="w-full">
            <flux:heading size="xl" level="1">{{ $title }}</flux:heading>
            <flux:text class="mt-2 mb-6 text-base">{{ $description }}</flux:text>
        </div>
    </div>

    <flux:separator variant="subtle" />
</div>

{{-- Page: Script Parent --}}
@push('structureScripts')
    {{-- Page: Scripts --}}
    <script>
        console.log('Page scripts: Overview')
    </script>

    {{-- Page: Additional Scripts --}}
    @stack('pageScripts')
@endpush
