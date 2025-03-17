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
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])

        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50 bg-secondary">
        {{-- @livewire('clicker') --}}
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 bg-dark">
                    @livewire("sidebar")
                </aside>
                <div class="col-lg-9">
                    <nav class="w-75 bg-dark text-white">
                        @livewire("navbar")
                    </nav>
                    <div class="search w-75">
                        @livewire("profile",["lazy"=>true])
                    </div>
                </div>
                {{-- <div>@livewire("index")</div> --}}
            </div>
        </div>
        <style>
            *{
                color: white;
            }
            aside{
                height: 100vh;
                position: fixed;
                left: 0;
                /* z-index: 2; */
            }
            nav{
                height: 60px;
                position: fixed;
                right: 0;
            }
            .search{
                height: calc( 100vh - 60px);
                position: fixed;
                right: 0;
                bottom: 0;
            }
            input{
                border: none;
                outline: none;
            }
        </style>
    </body>
</html>
