<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Crear Comentario:
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('comentarios.store', $game) }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="comentario" class="block text-gray-700">Añadir Comentario:</label>
                            <textarea id="comentario" name="comentario" class="w-full mt-1 border-gray-300 rounded-md shadow-sm" rows="3"
                                required></textarea>
                        </div>
                        <x-primary-button type="submit">Enviar</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
