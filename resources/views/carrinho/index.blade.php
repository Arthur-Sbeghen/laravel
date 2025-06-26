<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Carrinho
        </h2>
    </x-slot>

    <main class="grid grid-cols-3 gap-6 p-6">
    @if(count($carrinho) > 0)
        @foreach ($carrinho as $c)
            <div>
                @if(!empty($c->imagem))
                <div>
                    <img src="{{ asset("storage/$c->imagem") }}" alt="Imagem do Produto {{ $c->nome }}" class="max-w-45 h-48 object-cover">
                </div>
                @endif
                <div>
                    <p>{{ $c->nome }}</p>
                    <p>{{ $c->valor }}</p>
                    <form action="{{ route('carrinho.destroy', $c->id) }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" title="Deletar item">🗑️</button>
                    </form>
                    <button type="button">Comprar</button>
                </div>
            </div>
        @endforeach
        <button type="button">Comprar Todos</button>
    @else
        <p>Você não tem produtos no carrinho :/, tente adicioná-los ><a href="{{ route("produtos.index") }}">aqui</a><</p>
    @endif
    </main>
</x-app-layout>