@extends('layouts.app2')

@section('content')
<div class="max-w-md mx-auto py-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Editar Usuario</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="text-sm">
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium">Nombre</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                   class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label class="block text-sm font-medium">Nombre de usuario</label>
            <input type="text" name="username" value="{{ old('username', $user->username) }}" required
                   class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label class="block text-sm font-medium">Correo electrónico</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                   class="mt-1 w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('users.index') }}" class="text-sm text-gray-600 hover:underline">Cancelar</a>
            <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Actualizar</button>
        </div>
    </form>
</div>
@endsection
