<x-layout title="Categorias">
    <a href="/categories/create" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach ($categories as $category)
            <li class="list-group-item">{{ $category->name }}</li>
        @endforeach
    </ul>
</x-layout>
