<x-layout title="Editar Categoria '{!! $category->name !!}'">

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $category->name }}">
        </div>
    
        <div class="d-flex justify-content-between align-items-center">
            <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-5">&#x2190; Voltar</a>
            <button type="submit" class="btn btn-primary mt-5">Salvar</button>
        </div>
    </form>

</x-layout>