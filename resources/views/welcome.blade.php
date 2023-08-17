<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        @vite('resources/css/app.css')
    </head>
    <body class="bg-gray-400">
        <div class="h-12 w-12">
            <h1 class="text-3xl bg-red-500 font-bold underline">
                Hello world!
            </h1>
        </div>
    </body>
</html>
