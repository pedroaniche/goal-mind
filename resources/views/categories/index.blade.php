<x-layout title="Categorias">
    <a href="{{ route('categories.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($categories as $category)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{ route('goals.index', $category->id) }}">
                    {{ $category->name }}
                </a>

                <span class="d-flex">
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                        E
                    </a>

                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="ms-2">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">
                            X
                        </button>
                    </form>
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>
