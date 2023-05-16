<x-layout title="{{ $goal->name }}: Tarefas">
    @isset($message)
        <div class="alert alert-success">{{ $message }}</div>
    @endisset

    <ul class="list-group">
        @foreach ($goal->tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <form action="{{ route('categories.goals.tasks.update', [$category->id, $goal->id, $task->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <label for="checked" class="form-check-label">
                        <input type="checkbox" class="form-check-input" id="checked" name="checked" onchange="this.form.submit()" {{ $task->checked ? 'checked' : '' }}>
                    </label>
                    {{ $task->name }}
                </form>
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{ route('categories.goals.index', $category->id) }}" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
        <a href="{{ route('categories.goals.tasks.create', [$category->id, $goal->id]) }}" class="btn btn-dark mt-5">Adicionar</a>
    </div>
</x-layout>
