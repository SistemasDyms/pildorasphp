<?php
class concecionario{
	public $preciobase;
	static $ayuda=1500;
	
	function concecionario($modelo){

		if($modelo=="chevy"){
			$this->preciobase=9000;
		}else if($modelo=="aveo"){
			$this->preciobase=11000;
		}elseif ($modelo=="cherokee") {
			$this->preciobase=17000;
		}
	}


	/*Adicionales*/
	function add_aireacon(){
		$this->preciobase+=2200;
	}

	function add_gps(){
		$this->preciobase+=1800;
	}

	function add_tapiceria($color){
		if($color=="blanco"){
				$this->preciobase+=3500;
			}else if($color=="verde"){
				$this->preciobase+=2000;
			}
		else{
				$this->preciobase+=1500;
		}

	}/*Fin tapiceria*/
	function precio_final(){
		$total=$this->preciobase-self::$ayuda;
		return $total;
	}
}/*Fin de clase*/


		

?>