@extends('layouts.app2')

@section('content')
<div class="max-w-4xl mx-auto mt-10">

    {{-- Mostrar solo el formulario correspondiente --}}
    @if ($form === 'user')
        @include('components.forms.user-form')
    @elseif ($form === 'profile')
        <x-create-profile-form />
    @elseif ($form === 'statistics')
        <x-create-statistics-form />
    @else
        @include('components.selector-form')
    @endif
</div>
@endsection