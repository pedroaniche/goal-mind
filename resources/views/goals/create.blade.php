<x-layout title="Novo Objetivo">
    <form action="{{ route('categories.goals.store', $category->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="mb-3" id="tasks">
                <label for="task" class="form-label">Tarefas:</label>
                @if(old('tasks'))
                    @foreach(old('tasks') as $task)
                        <input type="text" class="form-control mb-2" name="tasks[]" value="{{ $task }}">
                    @endforeach
                @else
                    <input type="text" class="form-control mb-2" name="tasks[]">
                @endif
            </div>
            <button type="button" class="btn btn-primary mb-3" onclick="addTask()">Adicionar tarefa</button>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('categories.goals.index', $category->id) }}" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </div>
    </form>
</x-layout>

<script>
    function addTask() {
        const tasks = document.querySelector('#tasks');
        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control mb-2');
        input.setAttribute('name', 'tasks[]');
        tasks.appendChild(input);
        console.log(tasks);
    }
</script>