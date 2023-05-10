<?php

namespace App\Http\Controllers;

use App\Models\Capacitacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * Class CapacitacioneController
 * @package App\Http\Controllers
 */
class CapacitacionController extends Controller
{   

        public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $capacitaciones = Capacitacion::all();

        return view('capacitaciones.index', compact('capacitaciones'));
    }

 /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $capacitaciones = new Capacitacion();
        return view('capacitaciones.create', compact('capacitaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Usuarios = [];  
        $Usuarios= $request->all();
        $Usuarios['id_administrador'] = Auth::user()->id ;
       

        $capacitaciones = Capacitacion::create( $Usuarios);

        return redirect()->route('capacitaciones.index')
            ->with('success', 'Capacitacion creada exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $capacitaciones = Capacitacion::find($id);

        return view('capacitaciones.show', compact('capacitaciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $capacitaciones = Capacitacion::find($id);

        return view('capacitaciones.edit', compact('capacitaciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   //dd($id);
        $Usuarios = [];  
        $Usuarios= $request->all();
        $Usuarios['id_administrador'] = Auth::user()->id ;
unset($Usuarios['_method'],$Usuarios['_token']);
 //dd($Usuarios);
      Capacitacion::where('id', $id)->update($Usuarios);


        return redirect()->route('capacitaciones.index')
            ->with('success', 'Capacitacion actualizada exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $capacitaciones = Capacitacion::find($id)->delete();

        return redirect()->route('capacitaciones.index')
            ->with('success', 'Capacitaciones eliminada exitosamente');
    }
}
