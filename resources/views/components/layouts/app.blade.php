<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @vite('resources/css/app.css')

    </head>
    <body>

        <header class="bg-slate-300 my-1 mx-3 p-4">
            <nav class="flex justify-between">
                <h2 class="font-medium text-2xl font-mono">Q<span class="text-xl font-medium">&</span>A page</h2>
                <input class="border-2 border-slate-400 text-center" type="text" placeholder="Search...">
            </nav>
        </header>

        {{ $slot }}
    </body>
</html>
