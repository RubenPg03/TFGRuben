<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            AÑADIR JUEGO:
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('games.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-4">
                            <label for="titulo" class="block font-medium text-sm text-gray-700">Título del
                                Juego</label>
                            <input id="titulo" class="block mt-1 w-full" type="text" name="titulo"
                                :value="old('titulo')" required autofocus />
                        </div>

                        <div class="mt-4">
                            <label for="descripcion" class="block font-medium text-sm text-gray-700">Descripción</label>
                            <textarea id="descripcion" name="descripcion" rows="4" class="block mt-1 w-full"></textarea>
                        </div>

                        <div class="mt-4">
                            <label for="genero" class="block font-medium text-sm text-gray-700">Género</label>
                            <input id="genero" class="block mt-1 w-full" type="text" name="genero"
                                :value="old('genero')" required
                                placeholder="Ej: Acción, Aventura, Estrategia, RPG, Deportes, etc." />
                        </div>

                        <div class="mt-4">
                            <label class="block font-medium text-sm text-gray-700">Plataforma</label>
                            <div class="mt-1">
                                @foreach ($plataformas as $plataforma)
                                    <div class="flex items-center">
                                        <input type="checkbox" id="plataforma{{ $plataforma->id }}" name="plataforma[]"
                                            value="{{ $plataforma->id }}" class="mr-2">
                                        <label for="plataforma{{ $plataforma->id }}"
                                            class="text-sm plata">{{ $plataforma->plataforma }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="fecha_lanzamiento" class="block font-medium text-sm text-gray-700">Fecha de
                                Lanzamiento</label>
                            <input id="fecha_lanzamiento" style="cursor: pointer;" class="block mt-1 w-full"
                                type="date" name="fecha_lanzamiento" :value="old('fecha_lanzamiento')" required />
                        </div>

                        <div class="mt-4">
                            <label for="imagen" class="block font-medium text-sm text-gray-700">Imagen del
                                Juego</label>
                            <input id="imagen" style="cursor: pointer; width: 32%;" class="block mt-1" type="file"
                                name="imagen" accept="image/*" required />
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
