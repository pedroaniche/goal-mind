<x-layout title="Objetivos">
    <ul class="list-group">
        @foreach ($goals as $goal)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                    Objetivo {{ $goal->number }}

                <span class="badge bg-secondary">
                    {{ $goal->tasks->count() }}
                </span>
            </li>
        @endforeach
    </ul>
</x-layout>