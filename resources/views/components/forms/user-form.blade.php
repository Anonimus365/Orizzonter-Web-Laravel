<div class="max-w-2xl mx-auto mt-10 p-8 bg-white rounded-lg shadow-md border border-gray-200">
  <h2 class="text-2xl font-bold mb-6 text-gray-800">Crear nuevo usuario</h2>
  
  <form action="#" method="POST" class="space-y-6">
    <!-- Nombre -->
    <div>
      <label for="name" class="block text-sm font-medium text-gray-700">Nombre completo</label>
      <input type="text" name="name" id="name" maxlength="100" required
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <!-- Username -->
    <div>
      <label for="username" class="block text-sm font-medium text-gray-700">Nombre de usuario</label>
      <input type="text" name="username" id="username" maxlength="50" required
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <!-- Email -->
    <div>
      <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
      <input type="email" name="email" id="email" maxlength="191" required
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <!-- Password -->
    <div>
      <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
      <input type="password" name="password" id="password" required
        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
    </div>

    <!-- Botón -->
    <div>
      <button type="submit"
        class="w-full inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Guardar usuario
      </button>
    </div>
  </form>
</div>