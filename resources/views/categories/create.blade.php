<x-layout title="Nova Categoria">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-5">
            <div class="mb-5">
                <label for="name" class="form-label">Categoria:</label>
                <input type="text" autofocus id="name" name="name" class="form-control"
                    placeholder="nome da categoria" value="{{ old('name') }}">
            </div>

            <div class="mb-3" id="goals">
                <label for="goal" class="form-label">Objetivos:</label>
                @if (old('goals'))
                    @foreach (old('goals') as $goal)
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="goals[]" placeholder="nome do objetivo"
                                value="{{ $goal }}">
                            <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                        </div>
                    @endforeach
                @else
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" name="goals[]" placeholder="nome do objetivo">
                        <button type="button" class="btn btn-outline-danger" onclick="removeField(this)">X</button>
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-end">
                <button type="button" class="btn btn-secondary" onclick="addField()">Adicionar objetivo</button>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('categories.index') }}" class="btn btn-dark mt-5">Cancelar</a>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </div>
    </form>
</x-layout>

<script>
    function addField() {
        const fieldsList = document.querySelector('#goals');
        const field = document.createElement('div');
        field.classList.add('input-group', 'mb-2');

        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control');
        input.setAttribute('name', 'goals[]');
        input.setAttribute('placeholder', 'nome do objetivo');

        const removeButton = document.createElement('button');
        removeButton.setAttribute('type', 'button');
        removeButton.setAttribute('class', 'btn btn-outline-danger');
        removeButton.setAttribute('onclick', 'removeField(this)');
        removeButton.innerHTML = 'X';

        field.appendChild(input);
        field.appendChild(removeButton);
        fieldsList.appendChild(field);
    }

    function removeField(button) {
        const field = button.parentNode;
        const fieldsList = field.parentNode;
        fieldsList.removeChild(field);
    }
</script>
