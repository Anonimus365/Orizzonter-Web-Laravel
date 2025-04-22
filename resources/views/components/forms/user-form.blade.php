<div class="max-w-2xl mx-auto mt-12 p-8 bg-white rounded-2xl shadow-lg border border-gray-200">
  <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">Registrar nuevo usuario</h2>

  <form action="{{ route('users.store') }}" method="POST" class="space-y-6">
    @csrf

    <!-- {{-- Nombre --}} -->
    <div>
      <label for="name" class="block text-sm font-semibold text-gray-700">Nombre completo</label>
      <input type="text" name="name" id="name" maxlength="100" required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:ring-orange-500 focus:border-orange-500 transition duration-150">
    </div>

    <!-- {{-- Nombre de usuario --}} -->
    <div>
      <label for="username" class="block text-sm font-semibold text-gray-700">Nombre de usuario</label>
      <input type="text" name="username" id="username" maxlength="50" required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:ring-orange-500 focus:border-orange-500 transition duration-150">
    </div>

    <!-- {{-- Correo electrónico --}} -->
    <div>
      <label for="email" class="block text-sm font-semibold text-gray-700">Correo electrónico</label>
      <input type="email" name="email" id="email" maxlength="191" required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:ring-orange-500 focus:border-orange-500 transition duration-150">
    </div>

    <!-- {{-- Contraseña --}} -->
    <div>
      <label for="password" class="block text-sm font-semibold text-gray-700">Contraseña</label>
      <input type="password" name="password" id="password" required
        class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-xl shadow-sm focus:ring-orange-500 focus:border-orange-500 transition duration-150">
    </div>

    <!-- {{-- Botón --}} -->
    <div>
      <button type="submit"
        class="w-full py-3 px-6 text-white bg-orange-500 hover:bg-orange-600 rounded-xl text-base font-bold shadow-md transition duration-200">
        Guardar usuario
      </button>
    </div>
  </form>
</div>