@extends('layouts.app2')

@section('content')
<div class="max-w-md mx-auto py-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Crear Usuario</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            <ul class="text-sm list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" class="bg-white p-6 rounded shadow space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700" for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required
                   class="mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700" for="username">Nombre de usuario</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required
                   class="mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700" for="email">Correo electrónico</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                   class="mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700" for="password">Contraseña</label>
            <input type="password" name="password" id="password" required
                   class="mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-green-200">
        </div>

        <div class="flex justify-between items-center">
            <a href="{{ route('users.index') }}" class="text-sm text-gray-600 hover:underline">Cancelar</a>
            <button type="submit"
                    class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700 transition duration-150">
                Guardar
            </button>
        </div>
    </form>
</div>
@endsection
