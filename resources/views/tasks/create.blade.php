<x-layout title="Nova Tarefa">
    <form action="{{ route('categories.goals.tasks.store', [$category->id, $goal->id]) }}" method="POST">
        @csrf

        <div class="mb-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control"
                    value="{{ old('name') }}" placeholder="Nova tarefa">
            </div>

            <div class="mb-3" id="tasks">
                <label for="description" class="form-label">Descrição:</label>
                <textarea class="form-control mb-2" id="description" name="description" placeholder="Opcional">{{ old('description') }}</textarea>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('categories.goals.tasks.index', [$category->id, $goal->id]) }}"
                class="btn btn-secondary mt-5">
                &#x2190; Voltar
            </a>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </div>
    </form>
</x-layout>
