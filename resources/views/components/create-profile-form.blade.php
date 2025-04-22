<!-- resources/views/components/create-profile-form.blade.php -->
<form action="{{ route('profiles.store') }}" method="POST" class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow-lg space-y-6">
    @csrf

    <h2 class="text-2xl font-bold text-gray-800 mb-4">Crear Perfil de Ciclista 🚴‍♀️</h2>

    <!-- Nickname -->
    <div>
        <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
        <input type="text" name="nickname" id="nickname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
    </div>

    <!-- Tipo de ciclista -->
    <div>
        <label for="cyclist_type" class="block text-sm font-medium text-gray-700">Tipo de Ciclista</label>
        <input type="text" name="cyclist_type" id="cyclist_type" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
    </div>

    <!-- Género -->
    <div>
        <label for="gender" class="block text-sm font-medium text-gray-700">Género</label>
        <select name="gender" id="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500">
            <option value="">Selecciona una opción</option>
            <option value="male">Masculino</option>
            <option value="female">Femenino</option>
            <option value="other">Otro</option>
        </select>
    </div>

    <!-- Foto de perfil -->
    <div>
        <label for="profile_ph" class="block text-sm font-medium text-gray-700">URL de Foto de Perfil</label>
        <input type="text" name="profile_ph" id="profile_ph" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500">
    </div>

    <!-- Descripción -->
    <div>
        <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
        <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500"></textarea>
    </div>

    <!-- Social Media -->
    <div>
        <label for="social_media" class="block text-sm font-medium text-gray-700">Redes Sociales (JSON)</label>
        <input type="text" name="social_media" id="social_media" placeholder='{"instagram": "@tuusuario"}' class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500">
    </div>

    <!-- Rutas activas -->
    <div>
        <label for="busy_routes" class="block text-sm font-medium text-gray-700">Rutas Activas</label>
        <input type="number" name="busy_routes" id="busy_routes" value="0" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500">
    </div>

    <!-- Logros -->
    <div>
        <label for="achievements" class="block text-sm font-medium text-gray-700">Logros</label>
        <textarea name="achievements" id="achievements" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500"></textarea>
    </div>

    <!-- User ID -->
    <!-- <div>
        <label for="user_id" class="block text-sm font-medium text-gray-700">ID de Usuario</label>
        <input type="number" name="user_id" id="user_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500" required>
    </div> -->

    <!-- Interest Place ID -->
    <div>
        <label for="interest_place_id" class="block text-sm font-medium text-gray-700">Lugar de Interés (ID)</label>
        <input type="number" name="interest_place_id" id="interest_place_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500">
    </div>

    <!-- Configuración ID -->
    <div>
        <label for="configuration_id" class="block text-sm font-medium text-gray-700">Configuración (ID)</label>
        <input type="number" name="configuration_id" id="configuration_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-orange-500 focus:border-orange-500">
    </div>

    <!-- Botón -->
    <div class="pt-4">
        <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 px-4 rounded-md transition duration-300">
            Guardar Perfil
        </button>
    </div>
</form>
