<x-layouts.admin.sidebar-collapsible :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.admin.sidebar-collapsible>