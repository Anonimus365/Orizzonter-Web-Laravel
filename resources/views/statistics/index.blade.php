@extends('layouts.app2')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold text-gray-800">Estadísticas de Usuarios</h2>
        <!-- Enlace para crear nueva estadística -->
        <a href="{{ route('statistics.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none">
            Crear Nueva Estadística
        </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($statistics as $statistic)
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition duration-300 border border-gray-100">
                <div class="mb-4">
                    <h3 class="text-xl font-semibold text-gray-700 mb-1">
                        Usuario ID: <span class="text-blue-600">{{ $statistic->user_id }}</span>
                    </h3>
                    <p class="text-sm text-gray-500">Estadística ID: #{{ $statistic->id }}</p>
                </div>

                <ul class="space-y-1 text-sm text-gray-700">
                    <li><strong>Rutas:</strong> {{ $statistic->total_rides }}</li>
                    <li><strong>Distancia:</strong> {{ $statistic->total_distance }} km</li>
                    <li><strong>Tiempo:</strong> {{ $statistic->total_time }} min</li>
                    <li><strong>Calorías:</strong> {{ $statistic->calories_burned }} kcal</li>
                    <li><strong>Vel. Promedio:</strong> {{ $statistic->average_speed }} km/h</li>
                </ul>

                <!-- Formulario para eliminar la estadística -->
                <form action="{{ route('statistics.destroy', $statistic->id) }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-800 focus:outline-none">
                        Eliminar Estadística
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</div>
@endsection
