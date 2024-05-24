<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            <form action="{{ route('playstation') }}" method="GET" class="flex items-center">
                <div class="max-w-lg mx-auto flex items-center justify-center">
                    <input type="text" name="search" placeholder="Search a game..."
                        class="border border-gray-300 flex-grow buscador" value="{{ $search }}">
                    <button type="submit" class="bg-blue-500 px-3 py-2 boton">Buscar</button>
                </div>
            </form>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($games->count() > 0)
                        <div class="grid grid-cols-6 gap-4">
                            @php $count = 0; @endphp
                            @foreach ($games as $game)
                                @if ($count % 6 == 0)
                                    <div class="flex flex-row items-start">
                                @endif
                                <div class="p-4 rounded-md flex flex-col items-center shadow-md containerJuego"
                                    style="width: 14.5%; margin-left: 1%; margin-right: 1%;">
                                    <a href="{{ route('mostrar', $game->id) }}">
                                        <div class="image-container" style="cursor: pointer;">
                                            <img src="{{ asset('imagenes/' . $game->imagen) }}"
                                                alt="{{ $game->titulo }}" class="w-32 h-32 object-cover shadow-md">
                                        </div>
                                    </a>
                                    <h3 class="text-xs font-semibold mt-2 text-center">{{ $game->titulo }}</h3>
                                </div>
                                @php $count++; @endphp
                                @if ($count % 6 == 0 || $loop->last)
                        </div>
                    @endif
                    @endforeach
                </div>
            @else
                <p>No se encontraron juegos.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .containerJuego {
        position: relative;
        overflow: hidden;
    }

    .containerJuego img {
        transition: transform 0.3s ease;
    }

    .containerJuego:hover img {
        transform: scale(1.1);
    }
</style>