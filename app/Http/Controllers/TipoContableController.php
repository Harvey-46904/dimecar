<?php

namespace App\Http\Controllers;

use App\Models\Tipo_Contable;
use Illuminate\Http\Request;
use DB;
use Redirect;
class TipoContableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas=DB::table("tipo__contables")->select()->where("dato_tipo_contable","=","Entrada")->get();
        $salidas=DB::table("tipo__contables")->select()->where("dato_tipo_contable","=","Salida")->get();
        return view('dashboards.Registro_tc',compact("entradas","salidas"));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

       $crear_tipo= new Tipo_Contable;
       $crear_tipo->dato_tipo_contable=$request->tipo_contable;
       $crear_tipo->nombre_tipo_contable=$request->nombre;
       $crear_tipo->descripcion_tipo_contable=$request->Descripcion;
       $crear_tipo->save();
       return Redirect::to('/entrada_salida')->with('correcto', 'el tipo contable se creo correctamente');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tipo_Contable  $tipo_Contable
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo_Contable $tipo_Contable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tipo_Contable  $tipo_Contable
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Contable $tipo_Contable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tipo_Contable  $tipo_Contable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_Contable $tipo_Contable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tipo_Contable  $tipo_Contable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo_Contable $tipo_Contable)
    {
        //
    }
}
