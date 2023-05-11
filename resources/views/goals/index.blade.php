<x-layout title="Categoria {{ $category->name }}">
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($category->goals as $goal)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $goal->name }}

                <span class="d-flex">
                    <a href="" class="btn btn-primary btn-sm">
                        E
                    </a>

                    <form action="" method="POST" class="ms-2">
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

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
        <a href="{{}}" class="btn btn-dark mt-5">Adicionar</a>
    </div>
</x-layout>
