<x-layout title="Novo Objetivo">
    <form action="{{ route('categories.goals.store', $category->id) }}" method="POST">
        @csrf
        <div class="mb-5">
            <div class="mb-5">
                <label for="name" class="form-label">Objetivo:</label>
                <input type="text" autofocus id="name" name="name" class="form-control"
                    placeholder="nome do objetivo" value="{{ old('name') }}">
            </div>

            <div class="mb-3" id="tasks">
                <label for="task" class="form-label">Tarefas:</label>
                @if (old('tasks'))
                    @foreach (old('tasks') as $index => $task)
                        <div class="input-group mb-2">
                            <div class="input-group-text">
                                <input type="checkbox" name="checked[{{ $index }}]" value="1">
                            </div>
                            <input type="text" class="form-control" name="tasks[]" placeholder="descrição da tarefa"
                                value="{{ $task }}">
                            <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                        </div>
                    @endforeach
                @else
                    <div class="input-group mb-2">
                        <div class="input-group-text">
                            <input type="checkbox" name="checked[]" value="1">
                        </div>
                        <input type="text" class="form-control" name="tasks[]" placeholder="descrição da tarefa">
                        <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary" onclick="addField()">Adicionar tarefa</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-dark mt-5">Cancelar</a>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </div>
    </form>
</x-layout>

<script>
    function addField() {
        const fieldDiv = document.querySelector('#tasks');

        const field = document.createElement('div');
        field.classList.add('input-group', 'mb-2');

        const checkboxDiv = document.createElement('div');
        checkboxDiv.classList.add('input-group-text');

        const checkbox = document.createElement('input');
        checkbox.setAttribute('type', 'checkbox');
        checkbox.setAttribute('name', 'checked[]');
        checkbox.setAttribute('value', '1');

        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control');
        input.setAttribute('name', 'tasks[]');
        input.setAttribute('placeholder', 'descrição da tarefa');

        const removeButton = document.createElement('button');
        removeButton.setAttribute('type', 'button');
        removeButton.setAttribute('class', 'btn btn-outline-danger');
        removeButton.setAttribute('onclick', 'removeField(this)');
        removeButton.innerHTML = 'X';

        checkboxDiv.appendChild(checkbox);
        field.appendChild(checkboxDiv);
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
