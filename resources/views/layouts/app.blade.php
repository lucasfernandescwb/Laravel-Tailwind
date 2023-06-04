<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased bg-gray-50">
        <header class="p-4 bg-indigo-300 text-white shadow-sm">
            <nav class="container mx-auto flex h-full items-center justify-between">
                <a class="text-3xl font-bold" href="/">Laravel Tailwindcss</a>

                <div class="space-x-2">
                    <button class="py-2 px-3 bg-gray-100 font-medium rounded text-zinc-800">Github</button>
                </div>
            </nav>
        </header>

        <div class="container mx-auto px-4 py-8">
            @yield('content')
        </div>
    </body>
</html>
