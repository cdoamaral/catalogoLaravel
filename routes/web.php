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