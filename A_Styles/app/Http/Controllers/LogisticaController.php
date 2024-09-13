<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logistica;
use App\Models\Cliente;
use Barryvdh\DomPDF\Facade\Pdf;

class LogisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //metodo para visualizar los datos
    public function index()
    {
        $logisticas = Logistica::with('cliente')->get();
        return view('logistica.index_logistica', compact('logisticas'));
    }

    // creacion del pdf
    public function pdf() {
        $logistica = Logistica::all();
        $pdf = Pdf::loadView('Logistica.pdf', compact('logistica'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // crear un registro
    public function create()
    {
        //
        $clientes = Cliente::all();
        return view('logistica.create_logistica', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // verifica que el formulario este los datos correctamente
    public function store(Request $request)
    {
        Logistica::create($request->all());
        return redirect()->route('logisticas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // metodo para visualizar los datos 
    public function show(Logistica $logistica)
    {
        return view('logistica.show_logistica', compact('logistica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // editar los datos y verificar que todo este bien
    public function edit(Logistica $logistica)
    {
        $clientes = Cliente::all();
        return view('logistica.edit_logistica', compact('logistica', 'clientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // funcion para enviar los datos actualizados
    public function update(Request $request, Logistica $logistica)
    {
        $logistica->update($request->all());
        return redirect()->route('logisticas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // eliminar el registro de la base de datos
    public function destroy(Logistica $logistica)
    {
        $logistica->delete();
        return redirect()->route('logisticas.index');
    }
}
