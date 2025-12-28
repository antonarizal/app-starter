<x-layouts.admin.flowbite-sidebar :title="$title ?? null">
    <flux:main>
        {{ $slot }}
    </flux:main>
</x-layouts.admin.flowbite-sidebar>
