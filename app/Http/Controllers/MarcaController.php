<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //$marcas = Marca::all();
        $marcas = Marca::paginate(7);
        //en view va sin barra porque no es una peticion
        return view('adminMarcas',['marcas'=>$marcas]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('formAgregarMarca');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Capturamos datos enviados por el form
        //$mkNombre = $_POST['mkNombre'];

        $mkNombre = $request->input('mkNombre');

        ### validacion por metodo validate
        // entre corchetes la regla es 'campos: el que voy a validar ' => reglas: que caracteristicas va a tener
        // el $request es todo lo relacionado con el formulario
        $validacion = $request->validate(
            [
                'mkNombre' => 'required|min:3|max:50'
            //    'imagen'=>'required|image|max:2048', // si quisieramos validar imagenes
            //    'archivo'=>'file|max:1500' // validacion de un archivo
            ]
        );


        $Marca = new Marca;
        $Marca->mkNombre = $mkNombre;
        $Marca->save();

        return redirect('/adminMarcas')->with('mensaje', 'Marca: '.$mkNombre.' agregada correctamente' );


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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
