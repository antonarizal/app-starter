<div x-data="{ mobileSidebarOpen: false }">
    <!-- Tombol Toggle untuk Tablet & Mobile -->
    <button
        @click="mobileSidebarOpen = !mobileSidebarOpen"
        x-show="!mobileSidebarOpen"
        class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <!-- Overlay untuk Tablet & Mobile -->
    <div x-show="mobileSidebarOpen"
         @click="mobileSidebarOpen = false"
         class="fixed inset-0 z-30 bg-black bg-opacity-50 md:hidden"
         x-transition.opacity>
    </div>

    <!-- Sidebar -->
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform duration-300 ease-in-out"
        :class="{
            '-translate-x-full': !mobileSidebarOpen,
            'translate-x-0': mobileSidebarOpen,
            'lg:translate-x-0': true
        }"
        x-cloak
        aria-label="Sidebar">

        <div class="h-full px-3 py-4 overflow-y-auto bg-white dark:bg-gray-800 border-r-1 border-zinc-100 dark:border-gray-700">
            <!-- Header Sidebar -->
            <div class="flex items-center justify-between ps-2.5 mb-5">
                <a href="{{ url('/') }}" class="flex items-center">
                <svg class="w-8 h-8 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.403 5H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-6.403a3.01 3.01 0 0 1-1.743-1.612l-3.025 3.025A3 3 0 1 1 9.99 9.768l3.025-3.025A3.01 3.01 0 0 1 11.403 5Z" clip-rule="evenodd"/>
                    <path fill-rule="evenodd" d="M13.232 4a1 1 0 0 1 1-1H20a1 1 0 0 1 1 1v5.768a1 1 0 1 1-2 0V6.414l-6.182 6.182a1 1 0 0 1-1.414-1.414L17.586 5h-3.354a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                    </svg><span class="ml-3 self-center text-xl font-semibold whitespace-nowrap dark:text-white"> Aplikasi</span>
                </a>
                <!-- Tombol Close untuk Tablet & Mobile -->
                <button
                    @click="mobileSidebarOpen = false"
                    class="p-1 rounded-lg lg:hidden text-gray-500 hover:bg-gray-200 dark:hover:bg-gray-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            @php
            $name= 'Admin';
            $status= 'Administrator';
            $color= 'zinc';
                if(session('client')){
                    $name= session('client')->name;
                    $status= 'Customer';
                    $color= 'orange';
                }elseif (session('technician')) {
                    $name= session('technician')->name;
                    $status= 'Technician';
                    $color= 'blue';
                }
            @endphp
            <ul class="space-y-2 font-medium">
                <li>
            <flux:dropdown position="top" align="start">
            <flux:sidebar.profile icon="user" avatar:color="{{ $color }}"  name="{{ $name }}" icon:trailing="chevron-up-down" />
            <flux:menu>
                <flux:menu.radio.group>
                    <flux:menu.radio checked>{{ $status }}</flux:menu.radio>
                </flux:menu.radio.group>
                <flux:menu.separator />
                                    <flux:radio.group x-data variant="segmented" x-model="$flux.appearance">
                        <flux:radio value="light" icon="sun">{{ __('Light') }}</flux:radio>
                        <flux:radio value="dark" icon="moon">{{ __('Dark') }}</flux:radio>
                    </flux:radio.group>
            </flux:menu>
        </flux:dropdown>
                </li>
                <li>

                </li>

                {{ $slot }}

                <li>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-red-400 dark:hover:bg-red-400 group w-full">
                            <flux:icon name="arrow-right-start-on-rectangle" class="w-6 h-6 transition duration-75 dark:text-gray-400 group-hover:text-gray-100 dark:group-hover:text-white text-gray-500" />
                            <span class="ms-3 group-hover:text-gray-100">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content -->
    <div class="md:ml-64 transition-all duration-500">
        <!-- Konten utama aplikasi Anda -->
    </div>
</div>
