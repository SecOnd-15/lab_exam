@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Character</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('characters.update', $character->id) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <input name="name" value="{{ old('name', $character->name) }}" placeholder="Name" class="w-full p-2 border rounded" required>
        <input name="power" value="{{ old('power', $character->power) }}" placeholder="Power" class="w-full p-2 border rounded" required>
        <input name="universe" value="{{ old('universe', $character->universe) }}" placeholder="Universe" class="w-full p-2 border rounded" required>

        <button type="submit" class="btn btn-success btn-sm shadow">Update</button>
    </form>
@endsection


