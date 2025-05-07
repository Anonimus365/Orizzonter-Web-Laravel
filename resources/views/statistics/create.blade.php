@extends('layouts.app2')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Crear Nueva Estadística</h2>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc list-inside text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('statistics.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow space-y-6">
        @csrf

        <!-- Usuario -->
        <div>
            <label for="user_id" class="block text-sm font-medium text-gray-700">Usuario</label>
            <select id="user_id" name="user_id" required
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                <option value="">Seleccione un usuario</option>
                @foreach ($users as $user) <!-- Aquí iteramos sobre los usuarios -->
                    <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>
                        {{ $user->name }} <!-- Aquí se muestra el nombre del usuario -->
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Total de rutas -->
        <div>
            <label for="total_rides" class="block text-sm font-medium text-gray-700">Total de Rutas</label>
            <input type="number" id="total_rides" name="total_rides" min="0" required
                   value="{{ old('total_rides') }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Distancia total -->
        <div>
            <label for="total_distance" class="block text-sm font-medium text-gray-700">Distancia Total (km)</label>
            <input type="number" step="0.01" id="total_distance" name="total_distance" min="0" required
                   value="{{ old('total_distance') }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Tiempo total -->
        <div>
            <label for="total_time" class="block text-sm font-medium text-gray-700">Tiempo Total (min)</label>
            <input type="number" id="total_time" name="total_time" min="0" required
                   value="{{ old('total_time') }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Calorías -->
        <div>
            <label for="calories_burned" class="block text-sm font-medium text-gray-700">Calorías Quemadas (kcal)</label>
            <input type="number" step="0.01" id="calories_burned" name="calories_burned" min="0" required
                   value="{{ old('calories_burned') }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Velocidad promedio -->
        <div>
            <label for="average_speed" class="block text-sm font-medium text-gray-700">Velocidad Promedio (km/h)</label>
            <input type="number" step="0.01" id="average_speed" name="average_speed" min="0" required
                   value="{{ old('average_speed') }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
        </div>

        <!-- Botones -->
        <div class="flex items-center justify-between">
            <a href="{{ route('statistics.index') }}" class="text-sm text-gray-600 hover:underline">Cancelar</a>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
                Guardar Estadística
            </button>
        </div>
    </form>
</div>
@endsection
