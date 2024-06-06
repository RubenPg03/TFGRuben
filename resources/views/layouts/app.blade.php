<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('PLAYKEY', 'PLAYKEY') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="icon" type="image/png" href="{{ asset('imagenes/logo.png') }}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .fondoNav {
            background-image: linear-gradient(to right, #4F74E0, white, #8D53A6);
        }

        .fondoTotal {
            background-image: linear-gradient(to right, #4F74E0, white, #8D53A6);
        }

        .imagenCasa {
            margin-right: 6px;
        }

        .imagenPc {
            margin-right: 4px;
        }

        .imagenConsola {
            margin-right: 6px;
        }

        .buscador {
            border-radius: 4px;
            padding-inline: 100%;
            text-align: left;
            padding-left: 20px;
        }

        .boton {
            background-image: linear-gradient(to right, #4F74E0, #8D53A6);
            margin-left: 10px;
            border-radius: 4px;
            transition: transform 0.4s ease;
            color: rgb(255, 255, 255);
        }

        .botonCrear {
            background-color: rgb(87, 87, 87);
            margin-left: 10px;
            border-radius: 4px;
            transition: transform 0.4s ease;
        }

        .boton:hover,
        .botonCrear:hover {
            transform: scale(1.15);
        }

        .textoMensaje {
            color: green;
        }

        .plata {
            margin-left: 10px;
        }

        .imagen-pequeña {
            width: 30px;
        }

        footer {
            bottom: 0;
            left: 0;
            width: 100%;
            color: #fff;
            padding: 5px;
            text-align: center;
            font-size: 0.8em;
            margin-top: auto;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen fondoTotal">
        <div class="fondoNav">
            @include('layouts.navigation')
        </div>

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="text-white py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-center">
                <button id="backToTop" class="hover:bg-blue-700 text-white font-bold rounded imagen-pequeña">
                    <img src="{{ asset('imagenes/flecha.png') }}"alt="flecha">
                </button>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById('backToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
