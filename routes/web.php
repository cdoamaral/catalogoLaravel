<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view ('index');
});

#################################
##### CRUD DE CATEGORIAS ##### 
#################################

// Ahora es peticion y controlador
// Con el @metodo, de la peticion va al controlador, y del controlador dice a que metodo ir
// El @metodo es el action
Route::get('/adminCategorias', 'CategoriaController@index');



#################################
##### CRUD DE MARCAS ##### 
#################################
Route::get('/adminMarcas', 'MarcaController@index');

// Manejar peticion para agregar marca
Route::get('/agregarMarca', 'MarcaController@create');

//Manejar la peticion del formAgregarMarca
Route::post('agregarMarca', 'MarcaController@store');



#################################
##### CRUD DE USUARIOS ##### 
#################################
Route::get('/adminUsuarios', 'UsuarioController@index');


#################################
##### CRUD DE PRODUCTOS ##### 
#################################
Route::get('/adminProductos', 'ProductoController@index');

// Manejar peticion para agregar producto
Route::get('/agregarProducto', 'ProductoController@create' );

Route::post('/agregarProducto','ProductoController@store');

Route::get('/modificarProducto/{idProducto}', 'ProductoController@edit');