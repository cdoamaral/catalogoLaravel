<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	## Como se crean las relaciones de tablas con Eloquent
	/* 
	public function relTabla(){
	return $this->hasOne( model, fk en la tabla de esta clase (productos), pkTabla a relacionar );
	return $this->hasMany();
	return $this->belongsTo();

	retorna la relacion entre las tablas
	}

	Este metodo se llama en el controlador
	*/


	## relacion a tabla marcas
	public function getMarca()
	{
		return $this->belongsTo( 'App\Marca', 'idMarca', 'idMarca'  );
	}

	## relacion a tabla categorias
	public function getCategoria()
	{
		return $this->belongsTo( 'App\Categoria', 'idCategoria', 'idCategoria');

	}








}
