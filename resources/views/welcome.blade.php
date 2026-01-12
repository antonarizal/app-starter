<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ App\Models\Option::getValue('site_name') ?? 'Welcome' }}</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-white dark:bg-slate-950 text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">
        <!-- Navigation Header -->
        <header class="w-full border-b border-slate-200 dark:border-slate-800">
            <div class="max-w-6xl mx-auto px-6 lg:px-8 py-4">
                <nav class="flex items-center justify-between">
                    <!-- Logo -->
                    <div class="text-xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">
                        {{ App\Models\Option::getValue('site_name') ?? 'App' }}
                    </div>
                    @if (Route::has('login'))
                    <!-- Auth Links -->
                    <div class="flex items-center gap-3">
                        @auth
                            <a
                                href="{{ url('/dashboard') }}"
                                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 text-sm font-medium"
                            >
                                Dashboard
                            </a>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="px-4 py-2 text-slate-900 dark:text-slate-100 hover:bg-slate-100 dark:hover:bg-slate-800 rounded-lg transition-colors duration-200 text-sm font-medium"
                            >
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 text-sm font-medium"
                                >
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 flex items-center justify-center px-6 py-12">
            <div class="max-w-2xl w-full text-center space-y-8">
                <!-- Hero Section -->
                <div class="space-y-4">
                    <h1 class="text-5xl lg:text-6xl font-bold bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        Welcome
                    </h1>
                    <p class="text-xl text-slate-600 dark:text-slate-400">
                        Build something amazing with Laravel, Livewire, and Volt
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-6 mt-12">
                    <!-- Feature 1 -->
                    <div class="p-6 rounded-lg border border-slate-200 dark:border-slate-800 hover:border-blue-500 dark:hover:border-blue-400 hover:shadow-lg transition-all duration-300 bg-slate-50 dark:bg-slate-900/50">
                        <div class="text-3xl mb-3">⚡</div>
                        <h3 class="font-semibold text-lg mb-2">Lightning Fast</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm">
                            Build modern web applications with exceptional performance
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-6 rounded-lg border border-slate-200 dark:border-slate-800 hover:border-blue-500 dark:hover:border-blue-400 hover:shadow-lg transition-all duration-300 bg-slate-50 dark:bg-slate-900/50">
                        <div class="text-3xl mb-3">🎨</div>
                        <h3 class="font-semibold text-lg mb-2">Beautiful UI</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm">
                            Create stunning interfaces with Tailwind CSS and modern design
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="p-6 rounded-lg border border-slate-200 dark:border-slate-800 hover:border-blue-500 dark:hover:border-blue-400 hover:shadow-lg transition-all duration-300 bg-slate-50 dark:bg-slate-900/50">
                        <div class="text-3xl mb-3">🚀</div>
                        <h3 class="font-semibold text-lg mb-2">Scalable</h3>
                        <p class="text-slate-600 dark:text-slate-400 text-sm">
                            Build applications that grow with your business
                        </p>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="pt-8">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 font-semibold text-lg"
                        >
                            Go to Dashboard
                        </a>
                    @else
                        <div class="space-y-3">
                            <p class="text-slate-600 dark:text-slate-400">
                                Ready to get started?
                            </p>
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors duration-200 font-semibold text-lg"
                            >
                                Create an Account
                            </a>
                        </div>
                    @endauth
                </div>

                <!-- Footer Links -->
                <div class="pt-12 border-t border-slate-200 dark:border-slate-800 space-y-4">
                    <p class="text-slate-600 dark:text-slate-400 text-sm">
                        Learn more about Laravel and its ecosystem
                    </p>
                    <div class="flex justify-center gap-6 flex-wrap">
                        <a href="https://laravel.com/docs" target="_blank" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 text-sm font-medium transition-colors duration-200">
                            Documentation
                        </a>
                        <a href="https://laracasts.com" target="_blank" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 text-sm font-medium transition-colors duration-200">
                            Laracasts
                        </a>
                        <a href="https://laravel.com/community" target="_blank" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 text-sm font-medium transition-colors duration-200">
                            Community
                        </a>
                        <a href="https://github.com/laravel" target="_blank" class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 text-sm font-medium transition-colors duration-200">
                            GitHub
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="border-t border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-900/50">
            <div class="max-w-6xl mx-auto px-6 lg:px-8 py-8">
                <p class="text-center text-slate-600 dark:text-slate-400 text-sm">
                    © {{ date('Y') }} {{ App\Models\Option::getValue('site_name') ?? 'App' }}. All rights reserved.
                </p>
            </div>
        </footer>
    </body>
</html>
