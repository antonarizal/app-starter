<x-layouts.admin :title="__('Dashboard')">
<div class="grid sm:grid-cols-3 *:bg-zinc-200 *:p-5 gap-4 *:relative *:rounded-lg *:hover:bg-zinc-100 dark:*:bg-zinc-700 dark:*:hover:bg-zinc-600">
<a href="https://laravel.com/docs/11.x/installation" target="_blank" class="group bg-red-200! hover:bg-red-300! dark:bg-red-500! dark:hover:bg-red-600! relative p-6 rounded-lg transition-colors duration-200">
    <flux:icon.banknotes class="size-8 mb-2 text-red-600 dark:text-red-200" variant="solid"/>
    <p class="text-zinc-800 dark:text-white font-semibold mb-1">Laravel</p>
    <p class="text-zinc-500 dark:text-zinc-200 text-sm">Version 10 or later</p>
    <flux:icon.arrow-up-right class="size-4 text-zinc-500 group-hover:text-zinc-800 dark:fill-zinc-500 dark:group-hover:fill-white absolute top-4 right-4"/>
    
</a>
<a href="https://livewire.laravel.com/docs/installation" target="_blank" class="group bg-green-200! hover:bg-green-300! dark:bg-green-600! dark:hover:bg-green-700! relative p-6 rounded-lg transition-colors duration-200">
    <flux:icon.building-storefront class="size-8 mb-2 text-green-600 dark:text-green-200" variant="solid"/>
    <p class="text-zinc-800 dark:text-white font-semibold mb-1">Livewire</p>
    <p class="text-zinc-500 dark:text-zinc-200 text-sm">Version 3.7.0 or later</p>
    <flux:icon.arrow-up-right class="size-4 text-zinc-500 group-hover:text-zinc-800 dark:fill-zinc-500 dark:group-hover:fill-white absolute top-4 right-4"/>
    
</a>
<a href="https://tailwindcss.com/docs/installation" target="_blank" class="group bg-blue-200! hover:bg-blue-300! dark:bg-blue-600! dark:hover:bg-blue-700! relative p-6 rounded-lg transition-colors duration-200">
    <flux:icon.banknotes class="size-8 mb-2 text-blue-600 dark:text-blue-200" variant="solid"/>
    <p class="text-zinc-800 dark:text-white font-semibold mb-1">Tailwind CSS</p>
    <p class="text-zinc-500 dark:text-zinc-200 text-sm">Version 4.1 or later</p>
    <flux:icon.arrow-up-right class="size-4 text-zinc-500 group-hover:text-zinc-800 dark:fill-zinc-500 dark:group-hover:fill-white absolute top-4 right-4"/>
    
</a>
</div>
</x-layouts.admin>
