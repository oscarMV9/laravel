<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\ventas;
use Barryvdh\DomPDF\Facade\Pdf;

class ventaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = ventas::with('inventario')->get();
        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventarios = Inventario::all();
        return view('ventas.create', compact('inventarios'));
    }

    public function pdf() {
        $venta = ventas::all();
        $pdf = pdf::loadView('ventas.pdf', compact('venta'));
        return $pdf->stream();
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
            'documento_cliente' => 'required|integer',
            'nombre_cliente' => 'required|string|max:255',
            'apellido_cliente' => 'required|string|max:255',
            'inventario_id' => 'required|exists:inventario,id',
            'cantidad_comprada' => 'required|integer|min:1',
        ]);

        $prenda = Inventario::findOrFail($request->inventario_id);

        if ($prenda->cantidades < $request->cantidad_comprada) {
            return back()->withErrors(['cantidad_comprada' => 'se exedio las cantidades disponibles :)'])->withInput();
        }

        $precio_total = $prenda->precio * $request->cantidad_comprada;

        ventas::create([
            'documento_cliente' => $request->documento_cliente,
            'nombre_cliente' => $request->nombre_cliente,
            'apellido_cliente' => $request->apellido_cliente,
            'inventario_id' => $prenda->id,
            'cantidad_comprada' => $request->cantidad_comprada,
            'precio_unitario' => $prenda->precio,
            'precio_total' => $precio_total,
        ]);

        $prenda->update([
            'cantidades' => $prenda->cantidades - $request->cantidad_comprada
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta realizada exitosamente.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ventas $ventas)
    {
        $inventarios = Inventario::all();
        return view('ventas.edit', compact('ventas', 'inventarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Venta $venta)
    {
        $request->validate([
            'documento_cliente' => 'required|integer',
            'nombre_cliente' => 'required|string|max:255',
            'apellido_cliente' => 'required|string|max:255',
            'inventario_id' => 'required|exists:inventarios,id',
            'cantidad_comprada' => 'required|integer|min:1',
        ]);

        $prenda = Inventario::findOrFail($request->id);

        if ($prenda->cantidades < $request->cantidad_comprada) {
            return back()->withErrors(['cantidad_comprada' => 'La cantidad excede las existencias disponibles.'])->withInput();
        }

        $precio_total = $prenda->precio * $request->cantidad_comprada;

        $venta->update([
            'documento_cliente' => $request->documento_cliente,
            'nombre_cliente' => $request->nombre_cliente,
            'apellido_cliente' => $request->apellido_cliente,
            'inventario_id' => $prenda->id,
            'cantidad_comprada' => $request->cantidad_comprada,
            'precio_unitario' => $prenda->precio,
            'precio_total' => $precio_total,
        ]);

        return redirect()->route('ventas.index')->with('success', 'Venta actualizada exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ventas $venta)
    {
        $prenda = $venta->inventario;
        $prenda->update([
            'cantidades' => $prenda->cantidades + $venta->cantidad_comprada
        ]);

        $venta->delete();

        return redirect()->route('ventas.index')->with('success', 'Venta eliminada exitosamente.');

    }
}
