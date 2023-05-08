<x-layout title="Editar Categoria '{!! $category->name !!}'">
    <x-categories.form :action="route('categories.update', $category->id)" :name="$category->name" :update="true" />
</x-layout>