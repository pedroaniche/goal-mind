<x-layout title="Editar Objetivo: {{ $goal->name }}">
    <form action="{{ route('categories.goals.update', [$category->id, $goal->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <div class="mb-5">
                <label for="name" class="form-label">Objetivo:</label>
                <input type="text" autofocus id="name" name="name" class="form-control"
                    placeholder="nome do objetivo" value="{{ old('name') ?? $goal->name }}">
            </div>

            <div class="mb-3" id="tasks">
                <label for="task" class="form-label">Tarefas:</label>
                @if (old('tasks'))
                    @foreach (old('tasks') as $task)
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="tasks[]" placeholder="descrição da tarefa"
                                value="{{ $task->description }}">
                            <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                        </div>
                    @endforeach
                @else
                    @foreach ($goal->tasks as $task)
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="tasks[]" placeholder="descrição da tarefa"
                                value="{{ $task->description }}">
                            <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary" onclick="addField()">Adicionar tarefa</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-dark mt-5">Cancelar</a>
            <button type="submit" class="btn btn-primary mt-5">Atualizar</button>
        </div>
    </form>
</x-layout>

<script>
    function addField() {
        const fieldDiv = document.querySelector('#tasks');

        const field = document.createElement('div');
        field.classList.add('input-group', 'mb-2');

        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control');
        input.setAttribute('name', 'tasks[]');
        input.setAttribute('placeholder', 'descrição da tarefa');

        const removeButton = document.createElement('button');
        removeButton.setAttribute('type', 'button');
        removeButton.setAttribute('class', 'btn btn-outline-danger ');
        removeButton.setAttribute('onclick', 'removeField(this)');
        removeButton.innerHTML = 'X';

        field.appendChild(input);
        field.appendChild(removeButton);
        fieldDiv.appendChild(field);
    }

    function removeField(button) {
        const field = button.parentNode;
        const fieldDiv = field.parentNode;
        fieldDiv.removeChild(field);
    }
</script>
