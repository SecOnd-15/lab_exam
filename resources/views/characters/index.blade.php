@extends('layout')

@section('content')

        <h2 class="h3 text-dark">Characters</h2>
        <div class="mb-4">
            <a href="{{ route('characters.create') }}" 
               class="btn btn-success btn-sm shadow">
                Create Character
            </a>
        </div>

        <div class="list-group">
            @foreach ($characters as $character)
                <div class="list-group-item d-flex justify-content-between align-items-center p-4 mb-3 border shadow-sm rounded-lg bg-white">
                    <div>
                        <h5 class="mb-1 text-dark">{{ $character->name }}</h5>
                        <p class="mb-2 text-muted">{{ $character->power }}</p>
                        <small class="text-muted">{{ $character->universe }}</small>
                    </div>

                    <div class="dropdown">
                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('characters.edit', $character) }}">Edit</a></li>
                            <li>
                                <form action="{{ route('characters.destroy', $character) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item text-danger">Delete</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
