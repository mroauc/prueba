<?php

namespace App\Http\Controllers;

use App\encuestas;
use App\Respuestas;
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 

        // $datos['encuestas']=Encuestas::paginate(2);
        $encuestas = encuestas::where('rutProfesor',$request->user()->rut)->get();

        return view('encuestas.index',compact('encuestas'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('encuestas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $encuesta= new encuestas();
        $encuesta->pregunta1=$request->input('pregunta1');
        $encuesta->pregunta2=$request->input('pregunta2');
        $encuesta->pregunta3=$request->input('pregunta3');
        $encuesta->codigoCurso=$request->input('codigoCurso');
        $encuesta->rutProfesor=$request->input('rutProfesor');
        // $encuesta->Rut_Profesor=$request->user()->name;
        $encuesta->asunto=$request->input('asunto');

        $encuesta->save();

        return redirect('encuestas')->with('Mensaje','Encuesta agregada con éxito');
        //
        // $campos=[
        //     'pregunta1' => 'required|string|max:100',
        //     'pregunta2' => 'required|string|max:100',
        //     'pregunta3' => 'required|string|max:100',
        //     'codigoCurso' => 'required|string|max:100',
        //     'rutProfesor' => 'required|string|max:100',
        //     'asunto' => 'required|string|max:100'
        // ];
        // $Mensaje=["required"=>'El :attribute es requerido'];
        // $this->validate($request,$campos,$Mensaje);



        // //$datosEncuesta=request()->all();
        // $datosEncuesta=request()->except('_token');

        // Encuestas::insert($datosEncuesta);
        //return response()->json($datosEncuesta);
        // return redirect('encuestas')->with('Mensaje','Encuesta agregada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function show(encuestas $encuestas)
    {
        //
        return view('encuestas.result');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function edit($id_encuesta)
    {
        //
        $encuesta= Encuestas::findOrFail($id_encuesta);

        return view('encuestas.edit',compact('encuesta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_encuesta)
    {
        //
        $datosEncuesta=request()->except(['_token','_method']);
        Encuestas::where('id_encuesta','=',$id_encuesta)->update($datosEncuesta);

       // $encuesta= Encuestas::findOrFail($id_encuesta);
        //return view('encuestas.edit',compact('encuesta')); 
      return redirect('encuestas')->with('Mensaje','Encuesta modificada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_encuesta)
    {
        //
        Encuestas::destroy($id_encuesta);

      return redirect('encuestas')->with('Mensaje','Encuesta eliminada con éxito');
    }
}
