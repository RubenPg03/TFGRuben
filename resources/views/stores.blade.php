<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            AÑADIR TIENDA:
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('stores.store') }}">
                        @csrf

                        <div class="mt-4">
                            <label for="nombre" class="block font-medium text-sm text-gray-700">Nombre de la
                                Tienda</label>
                            <input id="nombre" class="block mt-1 w-full" type="text" name="nombre"
                                :value="old('nombre')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="url_juego_tienda" class="block font-medium text-sm text-gray-700">URL del Juego
                                de la Tienda</label>
                            <input id="url_juego_tienda" class="block mt-1 w-full" type="text"
                                name="url_juego_tienda" :value="old('url_juego_tienda')" required />
                        </div>

                        <div class="mt-4">
                            <label for="precio" class="block font-medium text-sm text-gray-700">Precio</label>
                            <input id="precio" class="block mt-1 w-full" type="number" name="precio" step="0.01"
                                :value="old('precio')" required />
                        </div>

                        <div class="mt-4">
                            <label for="videojuego_id" class="block font-medium text-sm text-gray-700">Juego</label>
                            <select id="videojuego_id" class="block mt-1 w-full" name="videojuego_id" required>
                                <option value="">Seleccione un juego</option>
                                @foreach ($videojuegos as $videojuego)
                                    <option value="{{ $videojuego->id }}">{{ $videojuego->titulo }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <button class="bg-blue-500 text-white px-3 py-2 botonCrear">Guardar</button>
                            @if (session('success'))
                                <p class="ml-4 text-green-500 textoMensaje">{{ session('success') }}</p>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
