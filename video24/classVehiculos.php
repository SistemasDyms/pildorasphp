<?php
class coche{

		var $color;
		var $ruedas;
		var $motor;
		var $puertas;

		function coche(){
			$this->color="";
			$this->ruedas=4;
			$this->motor=1600;
		}
		function arrancar(){
			echo "Aranque run run run!";
		}
		function parar(){
			echo "bueno STOP!!";
		}
		function establece_color($colorCoche,$nombreCoche){
			$this->color=$colorCoche;
			echo "el color de este coche es ".$this->color." y el nombre es ".$nombreCoche;
		}
	}
class camion{

		var $color;
		var $motor;
		var $ruedas;
		var $puertas;

		function camion(){
			$this->color="";
			$this->ruedas=8;
			$this->motor=2600;
		}
		function arrancar(){
			echo "Aranque run run run!";
		}
		function parar(){
			echo "bueno STOP!!";
		}
		function establece_color($colorCoche,$nombreCoche){
			$this->color=$colorCoche;
			echo "el color de este coche es ".$this->color." y el nombre es ".$nombreCoche;
		}
	}
?>