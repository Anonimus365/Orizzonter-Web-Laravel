<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Models\User;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las estadísticas
        $statistics = Statistic::all();
        
        // Retornar vista con las estadísticas
        return view('statistics.index', compact('statistics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener todos los usuarios
        $users = User::all();
        
        // Retornar vista con los usuarios
        return view('statistics.create', compact('users'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',  // Aseguramos que el usuario exista
            'total_rides' => 'required|integer|min:0',
            'total_distance' => 'required|numeric|min:0',
            'total_time' => 'required|integer|min:0',
            'calories_burned' => 'required|numeric|min:0',
            'average_speed' => 'required|numeric|min:0',
        ]);

        // Crear una nueva estadística con los datos validados
        Statistic::create($validated);

        // Redirigir con mensaje de éxito
        return redirect()->route('statistics.index')->with('success', 'Estadística creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Obtener la estadística por ID
        $statistic = Statistic::findOrFail($id);
        
        // Retornar vista de mostrar estadística
        return view('statistics.show', compact('statistic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Obtener la estadística por ID
        $statistic = Statistic::findOrFail($id);

        // Obtener usuarios para asociar una estadística a un usuario
        $users = User::all();

        // Retornar vista de edición de la estadística con los datos
        return view('statistics.edit', compact('statistic', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validación de los datos recibidos
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'total_rides' => 'required|integer|min:0',
            'total_distance' => 'required|numeric|min:0',
            'total_time' => 'required|integer|min:0',
            'calories_burned' => 'required|numeric|min:0',
            'average_speed' => 'required|numeric|min:0',
        ]);

        // Obtener la estadística a actualizar
        $statistic = Statistic::findOrFail($id);

        // Actualizar los campos de la estadística
        $statistic->update($validated);

        // Redirigir con mensaje de éxito
        return redirect()->route('statistics.index')->with('success', 'Estadística actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Obtener la estadística por ID
        $statistic = Statistic::findOrFail($id);

        // Eliminar la estadística
        $statistic->delete();

        // Redirigir con mensaje de éxito
        return redirect()->route('statistics.index')->with('success', 'Estadística eliminada correctamente.');
    }
}
