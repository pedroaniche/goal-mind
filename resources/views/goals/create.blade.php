<x-layout title="Nova Objetivo">
    <form action="{{ route('categories/{id}/goals.create', $category->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <div class="mb-3">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" autofocus id="name" name="name" class="form-control" value="{{ old('name') }}">
            </div>

            <div class="mb-3" id="objectives">
                <label for="goal" class="form-label">Objetivos:</label>
                @if(old('goals'))
                    @foreach(old('goals') as $goal)
                        <input type="text" class="form-control mb-2" name="goals[]" value="{{ $goal }}">
                    @endforeach
                @else
                    <input type="text" class="form-control mb-2" name="goals[]">
                @endif
            </div>
            <button type="button" class="btn btn-primary mb-3" onclick="addObjective()">Adicionar objetivo</button>
        </div>

        <button type="submit" class="btn btn-primary mt-5">Adicionar</button>
    </form>
</x-layout>

<script>
    function addObjective() {
        const objectives = document.querySelector('#objectives');
        const input = document.createElement('input');
        input.setAttribute('type', 'text');
        input.setAttribute('class', 'form-control mb-2');
        input.setAttribute('name', 'goals[]');
        objectives.appendChild(input);
    }
</script>