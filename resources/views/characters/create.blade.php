@extends('layout')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Add Character</h1>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 mb-4 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('characters.store') }}" class="space-y-4">
        @csrf

        <input name="name" placeholder="Name" class="w-full p-2 border rounded" required>
        <input name="power" placeholder="Power" class="w-full p-2 border rounded" required>
        <input name="universe" placeholder="Universe" class="w-full p-2 border rounded" required>

        <button type="submit" class="btn btn-success btn-sm shadow">Save</button>
    </form>
@endsection
