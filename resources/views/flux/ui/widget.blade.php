@props(['title' => 'Widget Title', 'icon' => 'bolt', 'count' => 0, 'color'=>'zinc','link' => '#', 'plus'=>false])
<div class="bg-{{ $color }}-200  hover:bg-zinc-100  dark:bg-zinc-700 dark:hover:bg-zinc-600 rounded-lg shadow-md p-6 transition duration-200 ease-in-out hover:scale-103">
    <div class="flex items-center justify-between mb-4">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $title }}</h3>
        <div class="p-2 bg-zinc-100 rounded-lg dark:bg-zinc-500 dark:text-zinc-50">
            @if($plus)
             <a href="{{ $link }}/create" ><flux:icon name="{{ $icon }}" /></a>
            @else
             <flux:icon name="{{ $icon }}" />
            @endif
        </div>
    </div>
    <div class="mb-2">
        <p class="text-3xl font-bold text-gray-900 dark:text-white">
            {{ $count }}
        </p>
    </div>
    <div class="mt-4">
        <a href="{{ $link }}"
            class="text-blue-600 dark:text-blue-100 hover:text-blue-800 dark:hover:text-blue-300 text-sm font-medium ">Lihat Detail</a>
    </div>
</div>
