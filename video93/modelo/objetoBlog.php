<?php 
//el objeto del blog  
//
Class ObjetoBlog{
	private $id;
	private $titulo;
	private $fecha;
	private $comentario;
	private $imagen;

	//asignamos
	public Get_id(){
		return $this->id;
	}
	public Get_titulo(){
		return $this->titulo;
	}
	public Get_fecha(){
		return $this->fecha;
	}
	public Get_comentario(){
		return $this->comentario;
	}
	public Get_imagen(){
		return $this->imagen;
	}
	//Mostramos la info
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


	public function ObjetoBlog(){

	}

}

 ?>