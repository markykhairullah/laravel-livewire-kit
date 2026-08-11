<x-layouts::base :title="$title" :description="isset($description) ? $description : null">
    {{-- Structure: Contents --}}
    <div class="w-dvw h-dvh max-w-full max-h-full">
        <flux:sidebar class="bg-neutral-50 dark:bg-neutral-900 border-r border-neutral-200 dark:border-neutral-700"
                      sticky collapsible>
            <flux:sidebar.header>
                <flux:sidebar.brand name="LL Kit" href="{{ route('home') }}">
                    <x-slot:logo>
                        <div
                             class="size-6 rounded shrink-0 bg-accent text-accent-foreground flex items-center justify-center">
                            <i class="font-serif font-bold">L</i>
                        </div>
                    </x-slot:logo>
                </flux:sidebar.brand>

                <flux:sidebar.collapse
                                       class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
            </flux:sidebar.header>

            <flux:sidebar.nav>
                <flux:sidebar.item icon="home" :href="route('dashboard.overview')"
                                   :current="request()->routeIs('dashboard.overview')" wire:navigate>
                    Dasbor
                </flux:sidebar.item>

                <flux:sidebar.group class="grid" expandable icon="users" heading="Pengguna">
                    <flux:sidebar.item href="{{ route('dashboard.users.view') }}">Akun</flux:sidebar.item>
                    <flux:sidebar.item href="#">Peran</flux:sidebar.item>
                    <flux:sidebar.item href="#">Hak Akses</flux:sidebar.item>
                </flux:sidebar.group>
            </flux:sidebar.nav>
        </flux:sidebar>

        <flux:header>
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown x-data align="end">
                <flux:button class="group" aria-label="Preferred color scheme" variant="subtle" square>
                    <flux:icon.sun class="text-neutral-500 dark:text-white" x-show="$flux.appearance === 'light'"
                                   variant="mini" />
                    <flux:icon.moon class="text-neutral-500 dark:text-white" x-show="$flux.appearance === 'dark'"
                                    variant="mini" />
                    <flux:icon.computer-desktop class="text-neutral-500 dark:text-white"
                                                x-show="$flux.appearance === 'system'" variant="mini" />
                </flux:button>

                <flux:menu>
                    <flux:menu.item icon="sun" x-on:click="$flux.appearance = 'light'">Terang</flux:menu.item>
                    <flux:menu.item icon="moon" x-on:click="$flux.appearance = 'dark'">Gelap</flux:menu.item>
                    <flux:menu.item icon="computer-desktop" x-on:click="$flux.appearance = 'system'">Sistem
                    </flux:menu.item>
                </flux:menu>
            </flux:dropdown>

            <flux:separator class="my-4 mx-4" vertical />

            <flux:dropdown position="top" align="end">
                <flux:profile name="Admin" initials="A" />

                <flux:menu class="w-64 max-w-full" inset="top">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                <flux:avatar name="Admin" initials="A" />

                                <div class="grid flex-1 text-start text-sm leading-tight">
                                    <flux:heading class="truncate">Admin</flux:heading>
                                    <flux:text class="truncate">
                                        admin@eduplanner.com
                                    </flux:text>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item href="#" icon="cog" wire:navigate>
                            Pengaturan
                        </flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.item icon="arrow-right-start-on-rectangle">Logout</flux:menu.item>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        <flux:main>
            {{ $slot }}
        </flux:main>
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
