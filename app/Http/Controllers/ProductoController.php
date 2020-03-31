<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Marca;
use App\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // el ::with, es un metodo que fue creado en el modelo Producto. Hay que tener cuidado porque va entre comillas - como un string -
        // Al traer un metodo de eloquent, del model al traer todo los items, se cambia el all() por get();
        $productos = Producto::with('getMarca', 'getCategoria')->get();
        return view('adminProductos', ['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $marcas = Marca::all();
       $categorias = Categoria::all();

        return view('formAgregarProducto',
                            [
                                'marcas'=>$marcas,
                                'categorias'=>$categorias
                            ]
        );
    }


// Subir imagen
    private function subirImagen(Request $request)
    {
        $prdImagen = 'noDisponible.jpg'; // si no se envia la imagen usa esta

        if( $request->file('prdImagen') ){

        // 1ra opcion: para tomar el nombre original de la imagen
        $prdImagen = $request->prdImagen->getClientOriginalName();

        //2da opcion: nombre de imagen concatenado con la fecha
/*
        $prdImagen2 = time().'.'.$request->file('prdImagen')->getClientOriginalExtension();
*/
        //subir imagen:
            // recibe dos parametros: adonde quiero que vaya el archivo(destino) / el nombre que quiero que tenga el archivo
        $request->prdImagen->move( public_path('productos/'), $prdImagen);
        //$prdImagen = 'imagenEnviada';

        }
        return $prdImagen;

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion de los datos
        $validacion = $request->validate(
            [
                'prdNombre' => 'required|min:5|max:50',
                'prdPrecio' => 'required|numeric|min:0',
                'prdPresentacion' => 'required|min:5|max:100',
                'prdStock' => 'required|integer|min:0',
                'prdImagen' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048'
            ]
        );

        ## upload de imagen
        $prdImagen = $this->subirImagen($request);

        $Producto = new Producto();
        $Producto->prdNombre = $request->input('prdNombre');
        $Producto->prdPrecio = $request->input('prdPrecio');

        $Producto->idMarca = $request->input('idMarca');
        $Producto->idCategoria = $request->input('idCategoria');

        $Producto->prdPresentacion = $request->input('prdPresentacion');
        $Producto->prdStock = $request->input('prdStock');

        $Producto->prdImagen = $prdImagen;

        $Producto->save();

        return redirect('/adminProductos')->with('mensaje', 'Producto: '.  $Producto->prdNombre.' agregado correctamente' );
       
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
    public function edit($idProducto)
    {
        //
        $marcas = Marca::all();
        $categorias = Categoria::all();
        $producto = Producto::with('getMarca', 'getCategoria')->find( $idProducto );
                return view('formModificarProducto', [
                    'producto' => $producto, 
                    'marcas' => $marcas,
                    'categorias' => $categorias
                ]);

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
