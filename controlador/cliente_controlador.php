<?php
require_once 'modelo/cliente.php';

class ClienteControlador 
{
	
	public function Index(){
		
        require_once 'vista/clientevista.php';       
       
    }

    public function Guardar(){

        $cliente = new ClienteModelo();
        $cliente->nombre = $_REQUEST['nombre'];
        $cliente->apellido = $_REQUEST['apellido'];
        $cliente->email = $_REQUEST['email'];


        $resultado = $cliente->Guardar($cliente);

        if ($resultado){
            header('Location: index.php?i=1');    
        }        

    }

}

?>