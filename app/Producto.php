<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
	protected $primaryKey = 'idProducto';
	public $timestamps = false;

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


	## relacion a tabla marcas // Estos datos son para TRAER 
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
