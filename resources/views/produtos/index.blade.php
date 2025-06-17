<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-link-button href="{{ route('produtos.create') }}">
                        + Produto
                    </x-link-button>
                </div>
            </div>
        </div>
    </div>

    <main class="grid grid-cols-3 gap-6 p-6">
    @foreach ($produtos as $p)
        <div class="bg-white rounded-2xl">
            @if ($p->imagem !== null)
            <div>    
                <img src="{{ asset("storage/$p->imagem") }}" alt="Imagem do Produto {{ $p->nome }}" class="max-w-45 h-48 object-cover">
            </div>
            @endif
            <div class="p-4">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{$p->nome}}</h2>
                <p class="text-lg text-indigo-600 font-bold mb-2">R$ {{number_format($p->preco, 2, ',', '.')}}</p>
                <p class="text-gray-600 text-sm mb-4">{{$p->descricao}}</p>
            </div>
        </div>
    @endforeach
    </main>
</x-app-layout>