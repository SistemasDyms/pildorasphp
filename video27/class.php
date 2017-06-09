<?php
class coche{

	var $color;
	protected $ruedas;
	protected $motor;
	var $puertas;

	function coche(){// asi funciona el constructor tambien 
		$this->color="";
		$this->ruedas=4;
		$this->motor=1600;
	}
	function get_ruedas(){
		return $this->ruedas;
	}
	function get_motor(){
		return $this->motor;
	}
	function arrancar(){
		echo "Aranque run run run!<br>";
	}
	function parar(){
		echo "bueno STOP!!";
	}
	function set_color($colorCoche,$nombreCoche){
		$this->color=$colorCoche;
		echo "el color de este coche es ".$this->color." y el nombre es ".$nombreCoche."<br>";
	}
}
	/******************************************************************************************/
class camion extends coche{
	function set_color($colorCamion,$nombreCamnion){
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