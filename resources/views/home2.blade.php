@extends('layouts.app2')

@section('content')
<div class="max-w-4xl mx-auto mt-10">
    {{-- Navegación simple --}}
    <div class="flex justify-center gap-4 mb-8">
        <a href="{{ url('/home2/users') }}"
           class="px-4 py-2 rounded-md font-semibold shadow-md
           {{ $form === 'user' ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-orange-100' }}">
            Crear Usuario
        </a>

        <a href="{{ url('/home2/profile') }}"
           class="px-4 py-2 rounded-md font-semibold shadow-md
           {{ $form === 'profile' ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-orange-100' }}">
            Crear Perfil
        </a>

        <a href="{{ url('/home2/statistics') }}"
           class="px-4 py-2 rounded-md font-semibold shadow-md
           {{ $form === 'statistics' ? 'bg-orange-500 text-white' : 'bg-gray-100 text-gray-700 hover:bg-orange-100' }}">
            Crear Estadísticas
        </a>
    </div>

    {{-- Mostrar solo el formulario correspondiente --}}
    @if ($form === 'user')
        @include('components.forms.user-form')
    @elseif ($form === 'profile')
        <x-create-profile-form />
    @elseif ($form === 'statistics')
        <x-create-statistics-form />
    @else
        <p class="text-center text-red-500">Formulario no encontrado 😢</p>
    @endif
</div>
@endsection