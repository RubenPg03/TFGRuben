<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlayKey</title>
    <!-- Include the Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="imagenes/logo.png">

    <style>
        .fondo {
            background-image: linear-gradient(to bottom right, #4F74E0, white, #8D53A6);
        }

        .gradient-red {
            background-image: linear-gradient(90deg, #f72929 0%, #f87128 100%);
        }

        .gradient-blue {
            background-image: linear-gradient(90deg, #298cdd 0%, #27b4ad 100%);
        }

        .btn-expand:hover {
            transform: scale(1.25);
        }

        .fancy-title {
            text-shadow: 1px 1px 4px white;
            color: rgb(0, 0, 0);
            font-size: 5rem;
            color: #fff;
            text-shadow:
                3px 3px 2px #000,
                -3px 3px 2px #000000,
                -3px -3px 0 #000000,
                3px -3px 0 #000;
        }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900 flex justify-center items-center min-h-screen fondo">
    <div class="text-center">
        <h1 class="font-bold mb-20 fancy-title">PLAYKEY</h1>
        @if (Route::has('login'))
            <div class="mb-60">
                <a href="{{ route('login') }}"
                    class="block mb-6 px-6 py-3 text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition duration-300 ease-in-out gradient-red btn-expand">Log
                    in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="block px-6 py-3 text-white font-semibold rounded-lg shadow-md hover:opacity-90 transition duration-300 ease-in-out gradient-blue btn-expand">Register</a>
                @endif
            </div>
        @endif
    </div>
</body>

</html>
