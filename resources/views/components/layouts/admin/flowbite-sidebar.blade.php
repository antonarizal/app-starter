@php
    $menus = [
        'Dashboard' => [
            'icon' => 'home',
            'route' => 'dashboard',
            'current' => request()->routeIs('dashboard'),
        ],
        'Users' => [
            'icon' => 'users',
            'route' => 'admin.users',
            'current' => request()->routeIs('admin.users'),
        ],
        'Pengaturan' => [
            'icon' => 'cog',
            'route' => 'admin.pengaturan',
            'current' => request()->routeIs('admin.pengaturan'),
        ],
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        button {
            cursor: pointer;
        }
    </style>
</head>

<body class="min-h-screen bg-sky-50  dark:bg-zinc-800">
    <flux:ui.sidebar>
        @foreach ($menus as $title => $menu)
            <flux:ui.sidebar.link :menu="$menu">
                {{ $title }}
            </flux:ui.sidebar.link>
        @endforeach
    </flux:ui.sidebar>
    <div class="lg:p-4 lg:ml-64">
        {{ $slot }}
    </div>
    @fluxScripts
</body>

</html>
