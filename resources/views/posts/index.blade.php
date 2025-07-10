<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Posts
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-link-button href="{{ route('post.create') }}">
                        + Post
                    </x-link-button>
                </div>
            </div>
        </div>
    </div>

    <main class="grid grid-cols-3 gap-6 p-6">
    @if(!empty($posts))
        @foreach ($posts as $id => $p)
            <div>
                <div>
                    <p>{{ $p }}</p>
                    @if ($p->owner)
                    <form action="{{ route('posts.deletar', $id) }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" title="Deletar Post">🗑️</button>
                    </form>
                    <form action="{{ route('posts.edit') }}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $id }}">
                        <button type="submit" title="Editar Post">✏️</button>
                    </form>
                    @endif
                </div>
            </div>
        @endforeach
    @else
        <p>Você não tem categorias, tente adicioná-las acima.</p>
    @endif
    </main>
</x-app-layout>