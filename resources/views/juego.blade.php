<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Detalles del Juego:
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex items-center">
                    <div class="image-container w-1/3">
                        <img src="{{ asset('imagenes/' . $game->imagen) }}" alt="{{ $game->titulo }}"
                            class="max-w-xs object-cover shadow-md">
                    </div>
                    <div class="w-2/3 ml-4">
                        <p class="text-gray-700"><strong>Nombre:</strong> {{ $game->titulo }}</p><br>
                        <p class="text-gray-700"><strong>Descripción:</strong> {{ $game->descripcion }}</p><br>
                        <p class="text-gray-700"><strong>Género:</strong> {{ $game->genero }}</p><br>
                        <p class="text-gray-700"><strong>Fecha de lanzamiento:</strong> {{ $game->fecha_lanzamiento }}
                        </p><br>
                        <p class="text-gray-700"><strong>Plataformas:</strong>
                            @foreach ($game->plataformas as $index => $plataforma)
                                {{ $plataforma->plataforma }}
                                @if (!$loop->last)
                                    -
                                @endif
                            @endforeach
                        </p><br>
                        @php
                            $calificacionMedia = app('App\Http\Controllers\CalificacionController')->calificacionMedia(
                                $game->id,
                            );
                            $calificacionMedia = number_format($calificacionMedia, 1);
                        @endphp
                        <p class="text-gray-700"><strong>Puntuación:</strong> {{ $calificacionMedia }}</p>

                        <div class="flex mt-4">
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4 botonCom flex-grow">
                                <div class="p-2">
                                    <a href="{{ route('comentarios.crear', $game) }}" class="w-auto mx-auto block">Añadir Comentario</a>
                                </div>
                            </div>
                            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4 botonCal flex-grow">
                                <div class="p-2">
                                    <a href="{{ route('calificacion.crear', $game) }}" class="w-auto mx-auto block">Calificar Juego</a>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Tiendas:</h3>
                    <div class="grid gap-4">
                        <?php
                        $tiendasOrdenadas = $game->tiendas->sortBy('precio');
                        ?>
                        @foreach ($tiendasOrdenadas as $tienda)
                            <div class="bg-gray-100 p-4 border rounded-lg tienda-link"
                                data-url="{{ $tienda->url_juego_tienda }}">
                                <p class="text-gray-700"><strong>Nombre:</strong> {{ $tienda->nombre }}</p>
                                <p class="text-gray-700"><strong>Precio:</strong>
                                    {{ number_format($tienda->precio, 2) }} €</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    var tiendaLinks = document.querySelectorAll('.tienda-link');
                    tiendaLinks.forEach(function(link) {
                        link.addEventListener('mouseover', function() {
                            this.style.boxShadow = "0 3px 6px rgba(0, 0, 0, 0.1)";
                        });
                        link.addEventListener('mouseout', function() {
                            this.style.boxShadow = "none";
                        });
                        link.addEventListener('click', function() {
                            var url = this.getAttribute('data-url');
                            window.location.href = url;
                        });
                    });
                });
            </script>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-4">Comentarios:</h3>
                    @forelse ($game->comentarios as $comentario)
                        <div class="bg-gray-100 mb-4 p-4 border rounded-lg">
                            <div class="flex justify-between items-center mb-2">
                                <p class="text-gray-700"><strong>{{ $comentario->user->name }}</strong></p>
                                <p class="text-gray-500">{{ $comentario->created_at->format('d/m/Y - H:i') }}</p>
                            </div>
                            <p class="text-gray-700 colorCom">{{ $comentario->comentario }}</p>
                        </div>
                    @empty
                        <p class="text-gray-700">No hay comentarios aún.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .image-container {
        width: 45%;
        margin-right: 40px;
    }

    .botonCom {
        text-align: center;
        width: 20%;
        background-color: rgb(165, 165, 165);
        color: white;
        transition: background-color 0.3s, transform 0.3s;
    }

    .botonCom:hover {
        transform: scale(1.1);
    }

    .botonCal {
        text-align: center;
        width: 18%;
        background-color: rgb(165, 165, 165);
        color: white;
        transition: background-color 0.3s, transform 0.3s;
        margin-left: 20px;
    }

    .botonCal:hover {
        transform: scale(1.1);
    }

    .comment-author {
        flex-grow: 1;
    }

    .comment-date {
        flex-shrink: 0;
    }

    .colorCom {
        color: rgb(240, 51, 51);
    }

    .tienda-link {
        cursor: pointer;
        transition: transform 0.2s ease-in-out;
    }

    .tienda-link:hover {
        transform: translateY(-5px);
    }

    @media (max-width: 790px) {
        .image-container {
            display: none;
        }
    }
</style>
