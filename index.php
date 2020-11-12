<?php

(isset($_GET['a'])) ? $getaccion=$_GET['a'] :$getaccion='';

require_once "controlador/cliente_controlador.php";
$cliente = new ClienteControlador;

// Guardar
if ($getaccion=="guardar"){
	$cliente->Guardar();	   
}else{
	$cliente->Index();    	
}

?>