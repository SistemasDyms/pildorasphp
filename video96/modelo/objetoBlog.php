<?php 
//el objeto del blog  
//
Class ObjetoBlog{
	private $id;
	private $titulo;
	private $fecha;
	private $comentario;
	private $imagen;

	//Moatramos
	public function Get_id(){
		return $this->id;
	}
	public function Get_titulo(){
		return $this->titulo;
	}
	public function Get_fecha(){
		return $this->fecha;
	}
	public function Get_comentario(){
		return $this->comentario;
	}
	public function Get_imagen(){
		return $this->imagen;
	}
	//asignamos la info
	public function Set_id($id){
		$this->id=$id;
	}
	public function Set_titulo($titulo){
		$this->titulo=$titulo;
	}
	public function Set_fecha($fecha){
		$this->fecha=$fecha;
	}
	public function Set_comentario($comentario){
		$this->comentario=$comentario;
	}
	public function Set_imagen($imagen){
		$this->imagen=$imagen;
	}



}

 ?>