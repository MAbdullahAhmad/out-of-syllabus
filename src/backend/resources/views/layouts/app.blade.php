<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }} | @yield('subtitle') </title>

        @viteReactRefresh
        @vite('resources/js/app.jsx')
    </head>
    <body>
        @yield('content')
    </body>
</html>
