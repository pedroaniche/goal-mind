<x-layout title="Nova Categoria">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="mb-3" id="goals">
                <label for="goal" class="form-label">Objetivos:</label>
                @if(old('goals'))
                    @foreach(old('goals') as $goal)
                        <input type="text" class="form-control mb-2" name="goals[]" value="{{ $goal }}">
                    @endforeach
                @else
                    <input type="text" class="form-control mb-2" name="goals[]">
                @endif
            </div>
            <button type="button" class="btn btn-primary mb-3" onclick="addGoals()">Adicionar objetivo</button>
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </div>
    </form>
</x-layout>

<script>
    function addGoals() {
        const goals = document.querySelector('#goals');
        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control mb-2');
        input.setAttribute('name', 'goals[]');
        goals.appendChild(input);
    }
</script>
