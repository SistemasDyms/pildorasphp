<?php
class coche{

	var $color;
	private $ruedas;
	var $motor;
	var $puertas;

	function coche(){// asi funciona el constructor tambien 
		$this->color="";
		$this->ruedas=4;
		$this->motor=1600;
	}
	function arrancar(){
		echo "Aranque run run run!<br>";
	}
	function parar(){
		echo "bueno STOP!!";
	}
	function establece_color($colorCoche,$nombreCoche){
		$this->color=$colorCoche;
		echo "el color de este coche es ".$this->color." y el nombre es ".$nombreCoche."<br>";
	}
}
	/******************************************************************************************/
class camion extends coche{
	function establece_color($colorCamion,$nombreCamnion){
		$this->color=$colorCamion;
		echo "el color del camion es ".$this->color." y el nombre es ".$nombreCamnion."<br>";
	}
	function camion(){
		$this->color="";
		$this->ruedas=8;
		$this->motor=2600;
	}
	function arrancar(){
		parent::arrancar();
		echo "el camion arranco";
	}
}
		

?>