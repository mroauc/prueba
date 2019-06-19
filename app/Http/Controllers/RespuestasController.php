<?php

namespace App\Http\Controllers;

use App\Encuestas;
use App\Respuestas;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('respuestas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('respuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosEncuesta=request()->except('_token');

        Respuestas::insert($datosEncuesta);
        return view('respuestas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    /*public function show(Respuestas $respuestas)
    {
        //
    }*/
     public function show(Request $request)
    {
        //
        $id_encuesta=request()->except('_token');
        $encuesta['datos']= Encuestas::findOrFail($id_encuesta);
        return view('respuestas.create',$encuesta);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */


    public function mostrarRespuestas($id_encuesta)
    {
        //
        $respuesta=Respuestas::where('idencuesta','=',$id_encuesta)->paginate(3);
        return view('respuestas.result',compact('respuesta'));
    }




    public function edit(Respuestas $respuestas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuestas $respuestas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuestas $respuestas)
    {
        //
    }
}
