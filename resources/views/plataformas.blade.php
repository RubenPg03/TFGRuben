<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            AÑADIR PLATAFORMA:
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('plataforma.plataforma') }}">
                        @csrf

                        <div class="mt-4">
                            <label for="plataforma" class="block font-medium text-sm text-gray-700">Plataforma</label>
                            <input id="plataforma" class="block mt-1 w-full" type="text" name="plataforma"
                                :value="old('plataforma')" required />
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
