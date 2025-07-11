<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Produtos &raquo; Criar
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('produtos.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Nome -->
                    <div>
                        <x-input-label for="nome" :value="__('Nome')" />
                        <x-text-input id="nome" class="block mt-1" type="text" name="nome" :value="old('nome')" required autofocus autocomplete="nome" />
                        <x-input-error :messages="$errors->get('nome')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="preco" :value="__('Preço')" />
                        <x-text-input id="preco" class="block mt-1" type="number" name="preco" :value="old('preco')" required autofocus autocomplete="preco" />
                        <x-input-error :messages="$errors->get('preco')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="descricao" :value="__('Descrição')" />
                        <x-textarea id="descricao" class="block mt-1" type="number" name="descricao" :value="old('descricao')" required autofocus autocomplete="descricao">{{ old('descricao') }}</x-textarea>
                        <x-input-error :messages="$errors->get('descricao')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="imagem" :value="__('Imagem')" />
                        <x-text-input id="imagem" class="block mt-1" type="file" accept="image/*" name="imagem" :value="old('imagem')" autofocus autocomplete="imagem" />
                        <x-input-error :messages="$errors->get('imagem')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="categorias" :value="__('categorias')" />
                        <select id="categorias" class="block mt-1" type="select" name="categorias" :value="old('categorias')" autofocus autocomplete="categorias">
                            <option value="">Selecione uma categoria</option>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('categorias')" class="mt-2" />
                    </div>

                    <x-primary-button class="mt-20">
                        Gravar Produto
                    </x-primary-button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>