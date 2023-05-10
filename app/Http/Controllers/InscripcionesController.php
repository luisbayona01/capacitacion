<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Capacitacion;
use Auth;
use DB;
use Illuminate\Http\Request;

/**
 * Class InscripcioneController
 * @package App\Http\Controllers
 */
class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function __construct()
    {
        $this->middleware('auth');
    }
    public function capacitaciones()
    {   
$inscripciones = DB::table('capacitaciones')->select('capacitaciones.nombre', 'capacitaciones.descripcion','capacitaciones.id  as idcapacitacion', 'inscripciones.id', 'inscripciones.capacitacion_id') ->leftJoin('inscripciones', 'capacitaciones.id', '=', 'inscripciones.capacitacion_id')
                ->leftJoin('users', 'inscripciones.usuario_id', '=', 'users.id') ->get();
//dd($inscripciones[0]->capacitacion_id);
        return view('inscripciones.index', compact('inscripciones'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function  store(Request $request)
    {    $inscripcion = [];  
        $inscripcion= $request->all();
        $inscripcion['usuario_id'] = Auth::user()->id ;
  //dd($inscripcion);
        $inscripciones = Inscripcion::create($inscripcion);

        return redirect()->route('inscribir')
            ->with('success', 'Inscrito exitosamente');
    }

    
/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   $id= $request->id;
    //dd($id);
        $inscripcione = Inscripcion::find($id)->delete();

        return redirect()->route('inscribir')
            ->with('success', 'Inscripcion eliminada exitosamente');
    }
}
