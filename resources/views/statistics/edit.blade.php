@extends('layouts.app2')

@section('content')
<div class="max-w-2xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Editar Estadísticas</h2>

    <form action="{{ route('statistics.update', $statistic->id) }}" method="POST" class="space-y-6 bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Total de Rutas</label>
            <input type="number" name="total_rides" value="{{ old('total_rides', $statistic->total_rides) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Distancia Total (km)</label>
            <input type="number" step="0.01" name="total_distance" value="{{ old('total_distance', $statistic->total_distance) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tiempo Total (min)</label>
            <input type="number" name="total_time" value="{{ old('total_time', $statistic->total_time) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Calorías Quemadas (kcal)</label>
            <input type="number" step="0.01" name="calories_burned" value="{{ old('calories_burned', $statistic->calories_burned) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Velocidad Promedio (km/h)</label>
            <input type="number" step="0.01" name="average_speed" value="{{ old('average_speed', $statistic->average_speed) }}"
                   class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div class="flex items-center justify-between">
            <a href="" class="text-sm text-gray-600 hover:underline">Cancelar</a>
            <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Guardar Cambios
            </button>
        </div>
    </form>
</div>
@endsection
