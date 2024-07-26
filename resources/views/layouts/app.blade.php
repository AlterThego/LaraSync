<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        (function() {
            const savedTheme = localStorage.getItem('theme') || 'winter';
            document.documentElement.setAttribute('data-theme', savedTheme);
        })();
    </script>
</head>

{{-- <body class="font-sans antialiased">
    <div class="min-h-screen bg-base-100 bg-opacity-10 max-w-4xl mx-auto">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-base-200 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main>
            <div class="border border-gray-200 dark:border-gray-700">
                {{ $slot }}
            </div>
        </main>

        <!-- Aside Section -->
        @include('layouts.aside')
    </div>
</body> --}}

<body class="h-full">
    <div class="flex h-full">

        <!-- Left Sidebar -->
        @include('layouts.navigation')

        <!-- Main Content -->
        <main class="max-w-6xl mx-auto">
            {{ $slot }}

        </main>

        <!-- Right Sidebar -->
        @include('layouts.aside')
    </div>

    <!-- Mobile Navigation -->
    <div
        class="block md:hidden fixed bottom-0 left-0 right-0 bg-base-100 border-t border-gray-200 dark:border-gray-700">
        <div class="flex justify-around">
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=H" alt="Home" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=P" alt="Profile" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=S" alt="Settings" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=F" alt="Favorites" class="w-6 h-6">
            </button>
            <button class="p-2">
                <img src="https://placehold.co/24x24?text=G" alt="Github" class="w-6 h-6">
            </button>
        </div>
    </div>

    {{-- Theme Controller --}}
    <script>
        function applyTheme(theme) {
            document.documentElement.setAttribute('data-theme', theme);
            document.querySelectorAll('.theme-controller').forEach(controller => {
                controller.checked = theme === 'black';
            });
        }

        document.querySelectorAll('.theme-controller').forEach(controller => {
            controller.addEventListener('change', function() {
                const theme = this.checked ? 'black' : 'winter';
                applyTheme(theme);
                localStorage.setItem('theme', theme);
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
            const savedTheme = localStorage.getItem('theme') ||
                'winter';
            applyTheme(savedTheme);
        });
    </script>
</body>

</html>
