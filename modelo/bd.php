<?php
define ("clave","Life15"); //Clave
define ("usuario","userprueba"); //Usuario
define ("basededatos","bdprueba"); //Bd
define ("servidor","localhost"); //Servidor 

class BD
{

	function abrirconexion(){  

		$conexion = (mysqli_connect(servidor,usuario,clave,basededatos));  

		if (!$conexion) {
			echo mysqli_connect_error();
		}

		return $conexion;

	}   

	function consulta($consulta){

		$conexion = $this->abrirconexion();
		$resultado = mysqli_query($conexion, $consulta);

		if(!$resultado){  		
			echo 'MySQL Error: ' . mysqli_error($conexion);  
			exit;  
		}  

		return $resultado;   

	}  

}

?>