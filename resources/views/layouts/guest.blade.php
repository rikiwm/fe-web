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

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-gray-100 dark:bg-black">
        <div class="flex flex-col items-center min-h-screen p-4 pt-6 bg-transparent p-lg-0 sm:justify-center sm:pt-0">
            <div class="w-full max-h-screen min-h-[540px] p-3 px-6 py-4 mt-1 overflow-hidden shadow-inner shadow-green-200 dark:shadow-zinc-800 backdrop-blur-sm bg-white/30 dark:bg-zinc-900/30 sm:max-w-md sm:rounded-lg place-content-center">

                <div class="flex items-center justify-center py-6">
                    <a href="/" wire:navigate >
                        <x-application-logo class="w-24 h-24 text-green-500 fill-current dark:text-green-400" />
                    </a>
                </div>


                        {{ $slot }}
                </div>
            </div>
        </div>
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
    </body>
</html>
