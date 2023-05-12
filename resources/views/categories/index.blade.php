<x-layout title="Categorias">
    @isset($message)
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endisset

    <ul class="list-unstyled border-box" role="list">
        @foreach ($categories as $category)
            @if ($loop->first || $loop->iteration % 5 === 1)
                <div class="row mt-3 d-flex flex-wrap width-100 " role="group">
            @endif

            <div class="col-md-2 mb-3" role="listitem">
                <li class="border rounded p-3 text-center col-md-12 border-box">

                    <a href="{{ route('categories.goals.index', $category->id) }}" class="text-decoration-none text-dark">
                        {{ $category->name }}
                    </a>

                    <div class="d-flex justify-content-between mt-5">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                            E
                        </a>

                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                X
                            </button>
                        </form>
                    </div>
                </li>
            </div>

            @if ($loop->iteration % 5 === 0 || $loop->last)
                </div>
            @endif
        @endforeach
    </ul>


    <a href="{{ route('categories.create') }}" class="btn btn-dark mt-5">Adicionar</a>

</x-layout>
