<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Categorias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-link-button href="{{ route('categorias.create') }}">
                        + Produto
                    </x-link-button>
                </div>
            </div>
        </div>
    </div>

    <main class="grid grid-cols-3 gap-6 p-6">
    @if(!empty($categorias))
        @foreach ($categorias as $id => $c)
            <div>
                <div>
                    <p>{{ $c }}</p>
                    <form action="{{ route('categorias.deletar', $id) }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" title="Deletar Categoria">🗑️</button>
                    </form>
                    <form action="{{ route('categorias.edit') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="submit" title="Editar Categoria">✏️</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <p>Você não tem categorias, tente adicioná-las acima.</p>
    @endif
    </main>
</x-app-layout>