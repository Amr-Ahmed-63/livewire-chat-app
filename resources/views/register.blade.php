<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])

        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-dark">
        {{-- @livewire('clicker') --}}
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-4" >
                    @livewire('register')
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
        <style>
            *{
                color: white;
            }
            input{
                border: none;
                outline: none;
            }
        </style>
    </body>
</html>
