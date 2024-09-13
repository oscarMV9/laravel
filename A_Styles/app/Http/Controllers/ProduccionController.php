<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produccion;
use Barryvdh\DomPDF\Facade\Pdf;

class ProduccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $producciones = Produccion::all();
            return view('produccion.index_produc', compact('producciones'));
        
    }

    public function pdf() {
        $produccion = Produccion::all();
        $pdf = Pdf::loadView('produccion.pdf', compact('produccion'));
        return $pdf->stream();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produccion.create_produc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre_producto' => 'required|string|max:255',
            'talla' => ['required', 'string', function ($attribute, $value, $fail) use ($request) {
                $tipo_prenda = $request->input('nombre_producto');
                if (in_array($tipo_prenda, ['zapato', 'pantalon'])) {
                    if (!is_numeric($value)) {
                        $fail('La talla debe ser un número para zapatos o pantalones.');
                    }
                } else {
                    if (!in_array($value, ['X', 'XS', 'XL', 'L', 'M', 'S'])) {
                        $fail('La talla debe ser una de las siguientes: X, XS, XL, L, M, S.');
                    }
                }
            }],
            'color' => 'required|string|regex:/^[A-Z]+$/',
            'cantidad' => 'required|integer',
            'fecha_produccion' => 'required|date',
            'fecha_fin_produccion' => 'nullable|date',
            'estado' => 'required|string|max:255',
            'id_encargado' => 'required|integer',
            'nombre_encargado' => 'required|string|max:255',
            'apellido_encargado' => 'required|string|max:255',
        ]);
    
        Produccion::create($request->all());
    
        return redirect()->route('produccion.index')
                         ->with('success', 'Producción creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produccion $produccion)
    {
        return view('produccion.show_produc', compact('produccion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produccion $produccion)
    {
        return view('produccion.edit_produc', compact('produccion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produccion $produccion)
    {
        $request->validate([
            'nombre_producto' => 'required|string|max:255',
            'talla' => 'required|string',
            'color' => 'required|string|regex:/^[A-Z]+$/',
            'cantidad' => 'required|integer',
            'fecha_produccion' => 'required|date',
            'fecha_fin_produccion' => 'nullable|date',
            'estado' => 'required|string|max:255',
            'id_encargado' => 'required|integer',
            'nombre_encargado' => 'required|string|max:255',
            'apellido_encargado' => 'required|string|max:255',
        ]);

        $produccion->update($request->all());

        return redirect()->route('produccion.index')
                         ->with('success', 'Producción actualizada exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produccion $produccion)
    {
        $produccion->delete();

        return redirect()->route('produccion.index')
                         ->with('success', 'Producción eliminada exitosamente.');
    }
}
