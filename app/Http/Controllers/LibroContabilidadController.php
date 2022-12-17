<?php

namespace App\Http\Controllers;

use App\Models\Libro_contabilidad;
use Illuminate\Http\Request;
use DB;
use Redirect;
class LibroContabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tipos_entradas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Entrada")->get();
        return view('dashboards.Registro_libro');
    }
    public function consulta(Request $request){
        $desde=$request->desde;
        $hasta=$request->hastas;

        $vehiculi=DB::table("vehiculos")->where("placa","=",$request->placa)->first();
      
       $libro_contables=DB::table("libro_contabilidads")
       ->join('tipo__contables','tipo__contables.id_tipo_contable','=','libro_contabilidads.libro_tipo_contable')
       ->where("libro_vehiculo","=",$vehiculi->id_vehiculo)
           ->where(function($query) use ($desde,$hasta){
            $query->whereBetween('libro_contabilidads.created_at', [$desde, $hasta]);
        })->get();
       // return response(["data"=>$libro_contable]);
        $tipos_entradas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Entrada")->get();
        $tipos_salidas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Salida")->get();
        return view('dashboards.consulta_contable',compact("tipos_entradas","vehiculi","tipos_salidas","libro_contables"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculi=DB::table("vehiculos")->where("placa","=",$request->placa)->first();
        $crear_libro=new Libro_contabilidad;
        $crear_libro->libro_vehiculo=$vehiculi->id_vehiculo;
        $crear_libro->libro_tipo_contable=$request->tipo_entrada;
        $crear_libro->valor=$request->Valor;
        $crear_libro->conceptos=$request->dinero;
        $crear_libro->created_at=$request->fecha;
        $crear_libro->save();
        $url="/contabilidad/".$vehiculi->id_vehiculo;
        return Redirect::to($url)->with('correcto', 'el tipo contable se creo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libro_contabilidad  $libro_contabilidad
     * @return \Illuminate\Http\Response
     */
    public function show(Libro_contabilidad $libro_contabilidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libro_contabilidad  $libro_contabilidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro_contabilidad $libro_contabilidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libro_contabilidad  $libro_contabilidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro_contabilidad $libro_contabilidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libro_contabilidad  $libro_contabilidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro_contabilidad $libro_contabilidad)
    {
        //
    }

    public function libro(){
        $tipos_entradas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Entrada")->get();
        $tipos_salidas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Salida")->get();
        $carros=DB::table("vehiculos")->select()->get();
        return view('dashboards.libro_contable',compact("carros","tipos_entradas","tipos_salidas"));
    }

   public function mirar_libro($id){

    $vehiculi=DB::table("vehiculos")->where("id_vehiculo","=",$id)->first();
      
    $libro_contables=DB::table("libro_contabilidads")
    
    ->join('tipo__contables','tipo__contables.id_tipo_contable','=','libro_contabilidads.libro_tipo_contable')
    ->where("libro_vehiculo","=",$id)
    ->select("libro_contabilidads.*","tipo__contables.*","libro_contabilidads.created_at AS fecha")
    ->get();
    list($entradas,$salidas)= self::dividir_asientos($libro_contables);
    $valores=self::valores_totales($entradas,$salidas);
    
    // return response(["data"=>$libro_contable]);
     $tipos_entradas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Entrada")->get();
     $tipos_salidas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Salida")->get();
     return view('dashboards.consulta_contable',compact("tipos_entradas","vehiculi","tipos_salidas","entradas","salidas","valores"));
   }

   public function mirar_libro_fecha($id,Request $request){
  // return response(["data"=>$request->all()]);
    $vehiculi=DB::table("vehiculos")->where("id_vehiculo","=",$id)->first();
    $desde = $request->desde;
    $hasta = $request->hasta;
    $libro_contables=DB::table("libro_contabilidads")
    ->join('tipo__contables','tipo__contables.id_tipo_contable','=','libro_contabilidads.libro_tipo_contable')
    ->where("libro_vehiculo","=",$id)
    ->where("libro_vehiculo","=",$vehiculi->id_vehiculo)
    ->where(function($query) use ($desde,$hasta){
     $query->whereBetween('libro_contabilidads.created_at', [$desde, $hasta]);
 })
    //->whereBetween('libro_contabilidads.created_at', [$f1, $f2])
    ->select("libro_contabilidads.*","tipo__contables.*","libro_contabilidads.created_at AS fecha")
    ->get();
    //return response(["data"=>$libro_contables]);
    list($entradas,$salidas)= self::dividir_asientos($libro_contables);
    $valores=self::valores_totales($entradas,$salidas);
    
    // return response(["data"=>$libro_contable]);
     $tipos_entradas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Entrada")->get();
     $tipos_salidas=DB::table("tipo__contables")->where("dato_tipo_contable","=","Salida")->get();
     return view('dashboards.consulta_contable',compact("tipos_entradas","vehiculi","tipos_salidas","entradas","salidas","valores"));
   }

   public function dividir_asientos($consultas){
    $entradas=array();
    $salidas=array();
    foreach ($consultas as &$consulta) {
      if($consulta->dato_tipo_contable=="Entrada"){
        array_push($entradas,$consulta);
      }else{
        array_push($salidas,$consulta);
      }
    
    }
 return [$entradas,$salidas];
   }

   public function valores_totales($entrada,$salida){
        $valor_entrada=0;
        $valor_salida0=0;

        foreach ($entrada as $entradas) {
            $valor_entrada+=$entradas->valor;
        }
        foreach ($salida as $salidas) {
            $valor_salida0+=$salidas->valor;
        }
        $utilidad=$valor_entrada-$valor_salida0;
     
        return array(["ventrada"=>$valor_entrada,"vsalida"=>$valor_salida0,"utilidad"=>$utilidad]);
   }
}
