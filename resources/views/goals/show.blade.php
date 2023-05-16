<x-layout title="Tarefas de '{{ $goal->name }}'">
    @isset($message)
        <div class="alert alert-success">{{ $message }}</div>
    @endisset

    <ul class="list-group">
        @foreach ($goal->tasks as $task)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <form action="{{ route('categories.goals.tasks.update', [$category->id, $goal->id, $task->id]) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <label for="checked" class="form-check-label">
                            <input type="checkbox" class="form-check-input" id="checked" name="checked"
                                onchange="this.form.submit()" @if ($task->checked) checked @endif>
                        </label>
                    </form>

                    <div class="ms-3">
                        {{ $task->name }}
                    </div>
                </div>

                <form action="{{ route('categories.goals.tasks.destroy', [$category->id, $goal->id, $task->id]) }}"
                    method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-start align-items-center">
        <a href="{{ route('categories.show', $category->id) }}" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
    </div>
</x-layout>
