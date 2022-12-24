<?php

namespace App\Http\Controllers;

use App\Models\Proyecto_inventario;
use Illuminate\Http\Request;


class ProyectoInventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registro['inventarios1']=Proyecto_inventario::paginate('10');
        return view('inventario.index', $registro);
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
        $datosInventario=request()->except('_token','Crear');
        Proyecto_inventario::insert($datosInventario);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proyecto_inventario  $proyecto_inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto_inventario $proyecto_inventario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proyecto_inventario  $proyecto_inventario
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $datos=Proyecto_inventario::FindOrFail($id);
       return view('inventario.edit', compact('datos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proyecto_inventario  $proyecto_inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosInventario=request()->except('_token','_method');
        Proyecto_inventario::where('id','=',$id)->update($datosInventario);
        return redirect('inventario');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proyecto_inventario  $proyecto_inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proyecto_inventario::destroy($id);
        return redirect('inventario');
    }
}
