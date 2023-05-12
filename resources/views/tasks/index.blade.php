<x-layout title="{{ $category->name }}: Objetivos">
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach ($category->goals as $goal)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $goal->name }}
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
        <a href="{{ route('categories.goals.create', $category->id) }}" class="btn btn-dark mt-5">Adicionar</a>
    </div>
</x-layout>
