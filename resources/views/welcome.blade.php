<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body class="antialiased">
        <div class="flex items-center min-h-screen pl-20 bg-gray-100 dark:bg-gray-900">
            <h1 class="font-black text-9xl">
                Welcome to <span class="text-transparent bg-clip-text bg-gradient-to-tr from-blue-700 to-indigo-400">TailwindCSS v2</span>
            </h1>
        </div>
    </body>
</html>
