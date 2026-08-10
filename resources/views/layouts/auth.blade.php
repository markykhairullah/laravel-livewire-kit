<x-layouts::base :title="$title" :description="isset($description) ? $description : null">
    {{-- Structure: Contents --}}
    <div>
        {{ $slot }}
    </div>

    {{-- Structure: Script Parent --}}
    @push('baseScripts')
        {{-- Structure: Scripts --}}
        <script>
            console.log('Structure scripts')
        </script>

        {{-- Structure: Additional Scripts --}}
        @stack('structureScripts')
    @endpush
</x-layouts::base>
