<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js',])
        @livewireStyles
    </head>
    {{-- <div class="p-4 text-black bg-white rounded shadow-sm dark:bg-gray-800 dark:text-white sm:rounded-lg">
        <h1 class="text-lg font-bold">Laravel Breeze Dark Mode</h1>
        <p>Ini adalah contoh dark mode menggunakan Tailwind CSS.</p>
    </div> --}}
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-zinc-950 dark:text-white">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow dark:bg-zinc-900 dark:text-white">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <main>

                {{ $slot }}
            </main>
        </div>
        <x-footer-panel />
        @livewireScripts
        <script>
            // Ambil elemen tombol toggle
            var themeToggle = document.getElementById('theme-toggle');
            var htmlElement = document.documentElement;

            // Periksa preferensi tema yang disimpan di localStorage
            var currentTheme = localStorage.getItem('theme');
            if (currentTheme === 'dark') {
                htmlElement.classList.add('dark');
            } else if (currentTheme === 'light') {
                htmlElement.classList.remove('dark');
            }

            // Tambahkan event listener untuk tombol toggle
            themeToggle.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) {
                    htmlElement.classList.remove('dark');
                    localStorage.setItem('theme', 'light');
                } else {
                    htmlElement.classList.add('dark');
                    localStorage.setItem('theme', 'dark');
                }
            });
        </script>
@stack('scripts')

    </body>
</html>
