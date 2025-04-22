<div class="max-w-xl mx-auto bg-white p-6 rounded-2xl shadow-lg">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Registrar Estadísticas</h2>

    <form method="POST" action="{{ route('statistics.store') }}">
        @csrf

        <div class="mb-4">
            <label for="total_rides" class="block font-semibold text-gray-700">Total de recorridos</label>
            <input type="number" name="total_rides" id="total_rides" min="0"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
        </div>

        <div class="mb-4">
            <label for="total_distance" class="block font-semibold text-gray-700">Distancia total (km)</label>
            <input type="number" step="0.01" name="total_distance" id="total_distance" min="0"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
        </div>

        <div class="mb-4">
            <label for="total_time" class="block font-semibold text-gray-700">Tiempo total (min)</label>
            <input type="number" name="total_time" id="total_time" min="0"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
        </div>

        <div class="mb-4">
            <label for="calories_burned" class="block font-semibold text-gray-700">Calorías quemadas</label>
            <input type="number" step="0.01" name="calories_burned" id="calories_burned" min="0"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
        </div>

        <div class="mb-6">
            <label for="average_speed" class="block font-semibold text-gray-700">Velocidad promedio (km/h)</label>
            <input type="number" step="0.01" name="average_speed" id="average_speed" min="0"
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
        </div>

        <button type="submit"
            class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
            Guardar Estadísticas
        </button>
    </form>
</div>