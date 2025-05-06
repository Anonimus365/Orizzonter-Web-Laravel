<!-- resources/views/components/forms/selector.blade.php -->
<div class="max-w-5xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-10">¿Qué deseas crear hoy?</h2>

    <div class="grid gap-8 sm:grid-cols-1 md:grid-cols-3">
        <!-- Card: Usuario -->
        <a href="{{ route('users.create') }}" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border border-gray-200 text-center">
            <div class="text-orange-500 mb-3 text-4xl">
                👤
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Crear Usuario</h3>
            <p class="text-gray-600 text-sm">Registra un nuevo usuario en el sistema rápidamente.</p>
        </a>

        <!-- Card: Perfil -->
        <a href="{{ route('formularios', 'profile') }}" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border border-gray-200 text-center">
            <div class="text-orange-500 mb-3 text-4xl">
                🧾
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Crear Perfil</h3>
            <p class="text-gray-600 text-sm">Agrega detalles personales, tipo de ciclista y más.</p>
        </a>

        <!-- Card: Estadísticas -->
        <a href="{{ route('statistics.index') }}" class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition duration-300 border border-gray-200 text-center">
            <div class="text-orange-500 mb-3 text-4xl">
                📊
            </div>
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Agregar Estadísticas</h3>
            <p class="text-gray-600 text-sm">Ingresa datos de rendimiento y progreso.</p>
        </a>
    </div>
</div>