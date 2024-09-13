<?php

namespace App\Http\Controllers;
use App\Models\Inventario;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventarios = Inventario::all();
        return view('inventario.index', compact('inventarios'));
    }

    public function pdf() {
        $inventario = Inventario::all();
        $pdf = Pdf::loadView('Inventario.pdf', compact('inventario'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventarios = new Inventario();

        $inventarios->nombre = $request->nombre;
        $inventarios->descripcion = $request->descripcion;
        $inventarios->cantidades = $request->cantidades;
        $inventarios->talla = $request->talla;
        $inventarios->color = $request->color;
        $inventarios->precio = $request->precio;

        $inventarios->save();

    return redirect()->route('inventario.index')->with('success', 'Inventario creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inventario=Inventario::findOrFail($id);
        return view('inventario.edit', compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    // Validar los datos
    $request->validate([
        'nombre' => 'required',
        'descripcion' => 'required',
        'cantidades' => 'required|integer',
        'talla' => 'required',
        'color' => 'required',
        'precio' => 'required|numeric',
    ]);

    $data = [
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'cantidades' => $request->cantidades,
        'talla' => $request->talla,
        'color' => $request->color,
        'precio' => $request->precio,
    ];

    Inventario::where('id', '=', $id)->update($data);

    return redirect()->route('inventario.index')->with('success', 'Inventario actualizado exitosamente.');
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        $inventario->delete();

        return redirect()->route('inventario.index')->with('success', 'Inventario eliminado exitosamente.');
    }
}
