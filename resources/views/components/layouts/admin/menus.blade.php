@php
 function getMenus() {
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
    return $menus;
}
@endphp