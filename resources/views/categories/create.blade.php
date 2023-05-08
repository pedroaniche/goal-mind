<x-layout title="Nova Categoria">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="row mb-3">
            <div class="col-6">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="col-6">
                <label for="goalName" class="form-label">Objetivo:</label>
                <input type="text" id="goalName" name="goalName" class="form-control" value="{{ old('goalName') }}">
            </div>

            <div class="col-12 mt-3">
                <label for="taskName" class="form-label">Tarefa:</label>
                <input type="text" id="taskName" name="taskName" class="form-control" value="{{ old('taskName') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
