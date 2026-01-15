@props(['menu'])
@if (isset($menu['children']))
    @php
        $hasActiveChild = false;
        foreach ($menu['children'] as $child) {
            if ($child['current'] ?? false) {
                $hasActiveChild = true;
                break;
            }
        }
    @endphp

    <li x-data="{ open: {{ $hasActiveChild ? 'true' : 'false' }} }">
        <button type="button"
            @click="open = !open"
            class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-blue-100 dark:text-white dark:hover:bg-gray-700 {{ $hasActiveChild ? 'bg-blue-100 dark:bg-gray-800' : '' }}"
            aria-controls="{{ $menu['route'] }}">
            <flux:icon variant="outline" name="{{ $menu['icon'] }}"
                class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-blue-900 dark:group-hover:text-white" />

            <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $slot }}</span>
            <svg :class="{'rotate-180': open}" class="w-3 h-3 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>
        <ul id="{{ $menu['route'] }}"
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 transform -translate-y-2"
            x-transition:enter-end="opacity-100 transform translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 transform translate-y-0"
            x-transition:leave-end="opacity-0 transform -translate-y-2"
            class="py-2 space-y-2">
            @foreach ($menu['children'] as $child)
                <li>
                    <a href="{{ route($child['route']) }}" wire:navigate
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-100 dark:text-white dark:hover:bg-gray-700 {{ $child['current'] ? 'bg-blue-100 dark:bg-gray-700 text-blue-600 dark:text-blue-300 font-medium' : '' }}">
                        {{ $child['title'] }}
                        @if($child['current'])
                            {{-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> --}}
                        @endif
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@else
    <li>
        <a href="{{ route($menu['route']) }}" wire:navigate
            class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-100 dark:hover:bg-gray-700 group {{ $menu['current'] ? 'bg-blue-100 dark:bg-gray-700 text-blue-600 dark:text-blue-300 font-medium' : '' }}">
            <flux:icon variant="{{ $menu['current'] ? 'solid' : 'outline' }}" name="{{ $menu['icon'] }}"
                class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-blue-900 dark:group-hover:text-white {{ $menu['current'] ? 'text-blue-600 dark:text-blue-300' : 'text-gray-500' }}" />
            <span class="ms-3">{{ $slot }}</span>
            @if($menu['current'])
                {{-- <span class="ml-2 w-2 h-2 bg-blue-500 rounded-full"></span> --}}
            @endif
        </a>
    </li>
@endif
